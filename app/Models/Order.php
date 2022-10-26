<?php

namespace App\Models;

class Order
{
    public string $clientName;
    public \DateTimeInterface $dataFinished;
    public Budget $budget;
}