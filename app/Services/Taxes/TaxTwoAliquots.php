<?php

namespace App\Services\Taxes;

use App\Models\Budget;

abstract class TaxTwoAliquots implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        if($this->shouldApplyMaximumRate($budget)) {
            return $this->calcMaximumRate($budget);
        }

        return $this->calcMinimumRate($budget);
    }

    abstract protected function shouldApplyMaximumRate(Budget $budget): bool;
    abstract protected function calcMaximumRate(Budget $budget): float;
    abstract protected function calcMinimumRate(Budget $budget): float;
}