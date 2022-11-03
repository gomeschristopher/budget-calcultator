<?php

namespace App\Models;

use App\Contracts\Budgetable;

class BudgetItem implements Budgetable
{
    public float $value;

    public function value(): float
    {
        return $this->value;
    }
}