<?php

namespace App\Services\Taxes;

use App\Models\Budget;

class TaxIss extends Tax
{
    public function makeSpecificCalc(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}