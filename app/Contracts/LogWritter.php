<?php

namespace App\Contracts;

interface LogWritter
{
    public function write(string $formattedMessage): void;
}