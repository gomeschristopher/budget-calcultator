<?php

use App\Models\Budget;
use App\Models\BudgetList;

require_once 'vendor/autoload.php';

$budget1 = new Budget();
$budget1->itemsQuantity = 1;
$budget1->aprove();

$budget2 = new Budget();
$budget2->itemsQuantity = 2;
$budget2->reprove();

$budgetsList = new BudgetList();
$budgetsList->addBudget($budget1);
$budgetsList->addBudget($budget2);

foreach($budgetsList as $budget) {
    echo "Quantity: " . $budget->itemsQuantity . PHP_EOL;
}