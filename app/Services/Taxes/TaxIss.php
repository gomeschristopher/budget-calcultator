<?php

namespace App\Services\Taxes;

use App\Models\Budget;

class TaxIss implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}