<?php

namespace App\Services\Discounts;

use App\Models\Budget;

class DiscountMoreThanFiveItems extends Discount
{
    public function discountCalculate(Budget $budget): float
    {
        if($budget->itemsQuantity > 5) {
            return $budget->value * 0.1;
        }

        return $this->nextDiscount->discountCalculate($budget);
    }
}