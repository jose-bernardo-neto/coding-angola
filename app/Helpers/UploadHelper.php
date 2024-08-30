<?php

namespace App\Helpers;

class UploadHelper
{
    public static function uploadFile($request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->image;
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName().strtotime('now')).".$extension";
            $image->move(public_path('img/product_images'), $imageName);

            return $imageName;
        }
    }
}
