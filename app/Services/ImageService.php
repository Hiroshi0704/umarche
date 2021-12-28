<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageService
{
    public static function upload($imageFile, $folderName)
    {
        $fileName = uniqid(rand().'_') . '.' . $imageFile->extension(); // 1798419096_61cac9866ed77.jpg
        $resizedImage = InterventionImage::make($imageFile)->resize(1920, 1080)->encode();
        Storage::put('public/' . $folderName . '/' . $fileName, $resizedImage);
        return $fileName;
    }
}
