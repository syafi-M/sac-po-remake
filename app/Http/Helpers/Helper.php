<?php

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

function UploadImage($request, $NameFile)
{
    $file = $request->file($NameFile);
    if ($file != null && $file->isValid()) {
        $randomNumber = mt_rand(1, 999999);
        $rename = 'data' . $randomNumber . '.webp'; // Always use .webp extension

        try {
            // Store the original image temporarily
            $tempPath = $file->storeAs('temp', $rename, 'public');
            $fullTempPath = public_path('storage/temp/' . $rename);

            // Initialize ImageManager with GD driver
            $manager = new ImageManager(new Driver());
            $image = $manager->read($fullTempPath);

            // Resize to reasonable dimensions (max width 1920px)
            // $image->resize(1920, null, function ($constraint) {
            //     $constraint->aspectRatio();
            //     $constraint->upsize();
            // });

            // Convert to WebP with 90% quality
            $webpPath = public_path('storage/images/' . $rename);
            $image->toWebp(1)->save($webpPath);

            // Delete the temporary file
            unlink($fullTempPath);

            return $rename;
        } catch (\Exception $e) {
            // Log error but continue with original upload
            \Log::error('Image optimization failed: ' . $e->getMessage());

            // Fallback: Store original image if conversion fails
            $path = $file->storeAs('images', $rename, 'public');
            return $rename;
        }
    }

    return null;
}
