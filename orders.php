<?php

use App\Models\Budget;
use App\Models\OrderInfo;
use App\Models\Order;

require 'vendor/autoload.php';

$orders = [];
$orderInfo = new OrderInfo(md5('a'), new \DateTimeImmutable());

for($i = 0; $i < 1000; $i++) {
    $order = new Order();
    $order->info = $orderInfo;
    $order->budget = new Budget();

    $orders[] = $order;
}

echo memory_get_peak_usage();
