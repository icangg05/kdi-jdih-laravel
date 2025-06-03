<?php

use Illuminate\Support\Facades\Storage;

if (! function_exists('checkFilePath')) {
  function checkFilePath($directory, $file)
  {
    if (empty($file)) {
      return false;
    }

    $filePath = $directory . $file;
    if (!Storage::exists($filePath))
      return false;

    return true;
  }
}


if (! function_exists('uploadFile')) {
  function uploadFile($directory, $file)
  {
    $filename = $file->hashName();
    $file->storeAs($directory, $filename);

    return $filename;
  }
}
