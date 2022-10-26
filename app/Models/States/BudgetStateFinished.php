<?php

namespace App\Models\States;

use App\Models\Budget;

class BudgetStateFinished extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('Um orçamento finalizado não pode receber desconto.');
    }
}