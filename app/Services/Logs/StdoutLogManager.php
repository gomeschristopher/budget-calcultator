<?php

namespace App\Services\Logs;

use App\Contracts\LogWritter;
use App\Services\Logs\LogManager;

class StdoutLogManager extends LogManager
{
    public function createLogWritter(): LogWritter
    {
        return new StdoutLogWritter();
    }
}