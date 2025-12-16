<?php

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

function UploadImage($request, $NameFile, $location = 'images')
{
    $file = $request->file($NameFile);

    if ($file && $file->isValid()) {
        $randomNumber = mt_rand(1, 999999);
        $rename = 'data' . $randomNumber . '.webp';

        try {
            // temp upload
            $tempPath = $file->storeAs('temp', $rename, 'public');
            $fullTempPath = public_path('storage/temp/' . $rename);

            $manager = new ImageManager(new Driver());
            $image = $manager->read($fullTempPath);

            // ensure target directory exists
            $targetDir = public_path("storage/{$location}");
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }

            // save webp
            $webpPath = $targetDir . '/' . $rename;
            $image->toWebp(90)->save($webpPath);

            // delete temp
            unlink($fullTempPath);

            // dd($location, $rename);
            return "{$location}/{$rename}";
        } catch (\Exception $e) {
            \Log::error('Image optimization failed: ' . $e->getMessage());

            // fallback
            return $file->storeAs($location, $rename, 'public');
        }
    }

    return null;
}
