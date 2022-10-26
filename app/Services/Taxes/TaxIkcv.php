<?php

namespace App\Services\Taxes;

use App\Models\Budget;

class TaxIkcv extends TaxTwoAliquots
{
    protected function shouldApplyMaximumRate(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->itemsQuantity > 3;
    }

    protected function calcMaximumRate(Budget $budget): float
    {
        return $budget->value * 0.04;
    }

    protected function calcMinimumRate(Budget $budget): float
    {
        return $budget->value * 0.025;
    }
}