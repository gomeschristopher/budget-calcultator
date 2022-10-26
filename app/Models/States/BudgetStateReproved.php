<?php

namespace App\Models\States;

use App\Models\Budget;

class BudgetStateReproved extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('Um orçamento reprovado não pode receber desconto.');
    }

    public function finish(Budget $budget)
    {
        $budget->state = new BudgetStateFinished();
    }
}