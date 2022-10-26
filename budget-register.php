<?php

use App\Models\Budget;
use App\Services\BudgetRegister;
use App\Services\Http\HttpAdapterCurl;
use App\Services\Http\HttpAdapterReactPHP;

require 'vendor/autoload.php';

$httpAdapterCurl = new HttpAdapterCurl();
$httpAdapterReactPHP = new HttpAdapterReactPHP();

$budgetRegister = new BudgetRegister($httpAdapterReactPHP);
$budgetRegister->register(new Budget());