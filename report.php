<?php

use App\Models\Budget;
use App\Services\Reports\ExportedContentBudget;
use App\Services\Reports\ExportedFileXml;
use App\Services\Reports\ExportedFileZip;

require 'vendor/autoload.php';

$budget = new Budget();
$budget->value = 500;
$budget->itemsQuantity = 7;

$exportedBudget = new ExportedContentBudget($budget);
$exportedBudgetXml = new ExportedFileZip('budget');

echo $exportedBudgetXml->save($exportedBudget);