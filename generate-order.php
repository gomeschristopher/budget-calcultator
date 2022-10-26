<?php

require_once 'vendor/autoload.php';

use App\Repositories\OrderRepository;
use App\Services\GenerateOrderCommand;
use App\Services\GenerateOrderHandler;

$budgetValue = $argv[1];
$budgetItemsQuantity = $argv[2];
$orderClientName = $argv[3];

$generateOrderCommand = new GenerateOrderCommand($budgetValue, $budgetItemsQuantity, $orderClientName);
$generateOrderHandler = new GenerateOrderHandler();
$generateOrderHandler->attach(new OrderRepository());
$generateOrderHandler->execute($generateOrderCommand);