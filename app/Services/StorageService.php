<?php

namespace App\Services;

class StorageService
{
    public function uploadFile($file,$path): string
    {
        $filepath = $file->store($path,'public');

        return asset('storage/'.$filepath);

    }
}
