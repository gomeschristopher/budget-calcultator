<?php

namespace App\Services\Taxes;

use App\Models\Budget;

class TaxIcpp extends TaxTwoAliquots
{
    protected function shouldApplyMaximumRate(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function calcMaximumRate(Budget $budget): float
    {
        return $budget->value * 0.03;
    }

    protected function calcMinimumRate(Budget $budget): float
    {
        return $budget->value * 0.02;
    }
}