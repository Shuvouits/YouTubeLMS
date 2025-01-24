<?php

namespace App\Traits;

trait FileUploadTrait
{
    public function uploadFile($file, $folder, $existingFile = null)
    {
        if ($file) {
            // Define the target directory
            $targetFolder = public_path("upload/{$folder}");

            // Ensure the folder exists
            if (!file_exists($targetFolder)) {
                mkdir($targetFolder, 0755, true);
            }

            // Delete existing file if present
            if ($existingFile && file_exists(public_path(parse_url($existingFile, PHP_URL_PATH)))) {
                unlink(public_path(parse_url($existingFile, PHP_URL_PATH)));
            }

            // Generate a unique filename
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

            // Move the uploaded file to the target folder
            $file->move($targetFolder, $fileName);

            // Return the full public URL
            return url("upload/{$folder}/{$fileName}");
        }

        return $existingFile;
    }
}
