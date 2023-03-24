<?php

namespace App\Services\Logs;

use App\Contracts\LogWritter;

abstract class LogManager
{
    public function log(string $severity, string $message): void
    {
        $logWritter = $this->createLogWritter();

        $dateToday = date('d/m/Y');
        $formattedMessage = "[$dateToday][$severity]: $message";
        $logWritter->write($formattedMessage);
    }

    abstract function createLogWritter(): LogWritter;
}