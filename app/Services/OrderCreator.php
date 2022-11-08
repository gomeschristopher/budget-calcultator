<?php

namespace App\Services;

use App\Models\Budget;
use App\Models\Order;
use App\Models\OrderInfo;

class OrderCreator
{
    private array $infos = [];

    public function createOrder(
        string $clientName,
        string $dateFormatted,
        Budget $budget
    ) {
        $order = new Order();
        $orderInfo = $this->generateOrderInfo($clientName, $dateFormatted);
        $order->info = $orderInfo;
        $order->budget = $budget;
        return $order;
    }

    private function generateOrderInfo(string $clientName, string $dateFormatted)
    {
        $hash = md5($clientName . $dateFormatted);
        if(!array_key_exists($hash, $this->infos)) {
            $orderInfo = new OrderInfo($clientName, new \DateTimeImmutable($dateFormatted));
            $this->infos[$hash] = $orderInfo;
        }

        return $this->infos[$hash];
    }
}