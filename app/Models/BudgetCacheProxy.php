<?php

namespace App\Models;

use App\Contracts\Budgetable;

class BudgetCacheProxy extends Budget
{
    private float $valueCache = 0;
    private Budget $budget;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;    
    }


    public function addItem(Budgetable $item)
    {
        throw new \DomainException('Não é possivel adicionar item a orçamento cache.');
    }

    public function value(): float
    {
        if($this->valueCache == 0) {
            $this->valueCache = $this->budget->value();
        }   

        return $this->valueCache;
    }
}