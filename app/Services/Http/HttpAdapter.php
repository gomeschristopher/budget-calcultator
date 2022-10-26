<?php

namespace App\Services\Http;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}