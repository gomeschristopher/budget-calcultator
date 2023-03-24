<?php

namespace App\Services\Logs;

use App\Contracts\LogWritter;

class StdoutLogWritter implements LogWritter
{
    public function write(string $formattedMessage): void
    {
        echo $formattedMessage;
    }
}