<?php

namespace App\Services\Taxes;

use App\Models\Budget;

abstract class Tax
{
    private ?Tax $nextTax;

    public function __construct(Tax $nextTax = null)
    {
        $this->nextTax = $nextTax;
    }

    abstract protected function makeSpecificCalc(Budget $budget): float;

    public function calculateTax(Budget $budget)
    {
        $this->makeSpecificCalc($budget) + $this->makeNextTaxCalc($budget);
    }

    private function makeNextTaxCalc(Budget $budget)
    {
        return $this->nextTax === null ? 0 : $this->nextTax->calculateTax($budget);
    }
}
