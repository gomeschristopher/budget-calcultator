<?php

namespace App\Models;

class OrderInfo
{
    private string $client_name;
    private \DateTimeInterface $date_finished;

    public function __construct(string $client_name, \DateTimeInterface $date_finished)
    {
        $this->client_name = $client_name;
        $this->date_finished = $date_finished;
    }

    public function client_name(): string
    {
        return $this->client_name;
    }

    public function date_finished(): \DateTimeInterface
    {
        return $this->date_finished;
    }
}