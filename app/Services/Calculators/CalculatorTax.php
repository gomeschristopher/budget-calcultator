<?php

namespace App\Services\Calculators;

use App\Models\Budget;
use App\Services\Taxes\Tax;

class CalculatorTax
{
    public function calculateTax(Budget $budget, Tax $tax)
    {
        return $tax->calculateTax($budget);
    }
}