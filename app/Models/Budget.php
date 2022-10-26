<?php

namespace App\Models;

use App\Models\States\BudgetState;
use App\Models\States\BudgetStateApproving;

class Budget
{
    public int $itemsQuantity;
    public float $value;
    public BudgetState $state;

    public function __construct()
    {
        $this->state = new BudgetStateApproving();
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
}