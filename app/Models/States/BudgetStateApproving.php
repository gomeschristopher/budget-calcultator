<?php

namespace App\Models\States;

use App\Models\Budget;

class BudgetStateApproving extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.05;
    }

    public function aprove(Budget $budget)
    {
        $budget->state = new BudgetStateApproved();
    }

    public function reprove(Budget $budget)
    {
        $budget->state = new BudgetStateReproved();
    }
}