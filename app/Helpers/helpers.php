<?php

use Illuminate\Support\Facades\Storage;

if (! function_exists('checkFilePath')) {
  function checkFilePath($file)
  {
    if (empty($file)) {
      return false;
    }

    $filePath = config('app.doc_directory') . $file;
    if (!Storage::exists($filePath))
      return false;

    return true;
  }
}
