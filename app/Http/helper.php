<?php


use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

if (!function_exists("upload")) {
    function upload($model, $request, $input = "image")
    {
        if ($request->hasFile($input)) {
            $file = $request->file($input);
            $storage_path = public_path('uploads');
            $filename = uniqid(rand()) . time() . $file->getClientOriginalName();

            if ($input == "image") {
                $file = Image::make($file)->resize(200,200);
                $file->save($storage_path . "/" . $filename);
            } else {
                $request->file($input)->storeAs($storage_path, $filename);
            }

            if (!empty($model->$input)) {
                if (File::exists($storage_path . "/" . $model->$input)) {
                    unlink($storage_path . "/" . $model->$input);
                }
            }

            /*
            # Resize Image
            $width = 500;
            $height = 400;
            $savedImage->height() > $savedImage->width() ? $width = null : $height = null;
            $savedImage->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
            $savedImage->resize($width, $height);
            $thImage = $savedImage->save($storage_path . "/thumb/" . $filename);
            */

            $model->$input = $filename;
            $model->save();
        }
    }
}
