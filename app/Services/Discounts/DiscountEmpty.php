<?php

namespace App\Services\Discounts;

use App\Models\Budget;

class DiscountEmpty extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function discountCalculate(Budget $budget): float
    {
        return 0;
    }
}
