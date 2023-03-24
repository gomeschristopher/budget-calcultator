<?php

namespace App\Services\Logs;

use App\Contracts\LogWritter;

class FileLogWritter implements LogWritter
{
    private $file;

    public function __construct(string $fileDirectory)
    {
        $this->file = fopen($fileDirectory, 'a+');    
    }

    public function write(string $formattedMessage): void
    {
        fwrite($this->file, $formattedMessage . PHP_EOL);
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}