<?php

namespace App\Services\Discounts;

use App\Models\Budget;

abstract class Discount
{
    protected ?Discount $nextDiscount;

    public function __construct(?Discount $nextDiscount)
    {
        $this->nextDiscount = $nextDiscount;
    }

    abstract public function discountCalculate(Budget $budget): float; 
}