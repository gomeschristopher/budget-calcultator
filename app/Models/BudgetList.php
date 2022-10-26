<?php

namespace App\Models;

use Traversable;

class BudgetList implements \IteratorAggregate
{
    private array $budgets;

    public function __construct()
    {
        $this->budgets = [];
    }

    public function addBudget(Budget $budget)
    {
        $this->budgets[] = $budget;
    }

    public function budgets(): array
    {
        return $this->budgets;
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->budgets());
    }
}