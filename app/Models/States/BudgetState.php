<?php

namespace App\Models\States;

use App\Models\Budget;

abstract class BudgetState
{
    /**
     * @throws \DomainException
     */
    abstract public function calculateExtraDiscount(Budget $budget): float;

    public function aprove(Budget $budget)
    {
        throw new \DomainException('Esse orçamento não pode ser aprovado.');
    }

    public function reprove(Budget $budget)
    {
        throw new \DomainException('Esse orçamento não pode ser reprovado.');
    }

    public function finish(Budget $budget)
    {
        throw new \DomainException('Esse orçamento não pode ser finalizado.');
    }
}