<?php

use App\Models\Budget;
use App\Models\BudgetItem;

require 'vendor/autoload.php';

$budget = new Budget();

$budgetItem1 = new BudgetItem();
$budgetItem1->value = 300;

$budgetItem2 = new BudgetItem();
$budgetItem2->value = 500;

$budget->addItem($budgetItem1);
$budget->addItem($budgetItem2);

$budgetOld = new Budget();
$budgetItem3 = new BudgetItem();
$budgetItem3->value = 150;
$budgetOld->addItem($budgetItem3);

$budget->addItem($budgetOld);

echo $budget->value();