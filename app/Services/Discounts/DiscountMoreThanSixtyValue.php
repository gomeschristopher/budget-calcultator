<?php

namespace App\Services\Discounts;

use App\Models\Budget;

class DiscountMoreThanSixtyValue extends Discount
{
    public function discountCalculate(Budget $budget): float
    {
        if($budget->value > 60) {
            return $budget->value * 0.05;
        }

        return $this->nextDiscount->discountCalculate($budget);
    }
}