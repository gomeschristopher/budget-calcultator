<?php

namespace App\Models\States;

use App\Models\Budget;

class BudgetStateApproved extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.02;
    }

    public function finish(Budget $budget)
    {
        $budget->state = new BudgetStateFinished();
    }
}