<?php

namespace App\Models;

use App\Contracts\Budgetable;
use App\Models\States\BudgetState;
use App\Models\States\BudgetStateApproving;

class Budget implements Budgetable
{
    private array $items;
    public BudgetState $state;

    public function __construct()
    {
        $this->state = new BudgetStateApproving();
        $this->items = [];
    }

    public function applyExtraDiscount()
    {
        $this->value = $this->state->calculateExtraDiscount($this);
    }

    public function aprove()
    {
        $this->state->aprove($this);
    }

    public function reprove()
    {
        $this->state->reprove($this);
    }

    public function finish()
    {
        $this->state->finish($this);
    }

    public function addItem(Budgetable $item)
    {
        $this->items[] = $item;
    }

    public function value(): float
    {
        return array_reduce(
            $this->items,
            fn (float $sumValue, Budgetable $item) => $item->value() + $sumValue,
            0
        );
    }
}
