<?php

use App\Models\Budget;
use App\Services\OrderCreator;

require 'vendor/autoload.php';

$orders = [];
$orderCreator = new OrderCreator();

for($i = 0; $i < 1000; $i++) {
    $budget = new Budget();
    $order = $orderCreator->createOrder(
        'Chris',
        date('y-m-d'),
        $budget
    );

    $orders[] = $order;
}

echo memory_get_peak_usage();
