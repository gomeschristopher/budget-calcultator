<?php

use App\Models\Budget;
use App\Services\Taxes\TaxIcms;
use App\Services\Taxes\TaxIss;
use App\Services\Calculators\CalculatorDiscount;
use App\Services\Calculators\CalculatorTax;

require 'vendor/autoload.php';

$budget = new Budget();
$budget->value = 100;
$budget->itemsQuantity = 6;

//$calculatorTax = new CalculatorTax();
//echo $calculatorTax->calculateTax($budget, new TaxIss());

$calculatorDiscount = new CalculatorDiscount();
echo $calculatorDiscount->calculateDiscounts($budget);