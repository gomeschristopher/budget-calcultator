<?php

namespace App\Services\Logs;

use App\Contracts\LogWritter;

class FileLogManager extends LogManager
{
    private string $fileDirectory;

    public function __construct(string $fileDirectory)
    {
        $this->fileDirectory = $fileDirectory;
    }

    public function createLogWritter(): LogWritter
    {
        return new FileLogWritter($this->fileDirectory);
    }
}