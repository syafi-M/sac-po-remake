<?php

function UploadImage($request, $NameFile)
{

    $file = $request->file($NameFile);
    if ($file != null && $file->isValid()) {

        $extensions = $file->getClientOriginalExtension();
        $randomNumber = mt_rand(1, 999999);
        $rename = 'data' . $randomNumber . '.' . $extensions;

        $path = public_path('storage/images/' . $rename);
        $file->storeAs('images', $rename, 'public');

        return $rename;

    }
}
