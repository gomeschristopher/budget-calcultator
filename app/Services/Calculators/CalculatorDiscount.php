<?php

namespace App\Services\Calculators;

use App\Models\Budget;
use App\Services\Discounts\DiscountEmpty;
use App\Services\Discounts\DiscountLog;
use App\Services\Discounts\DiscountMoreThanFiveItems;
use App\Services\Discounts\DiscountMoreThanSixtyValue;

class CalculatorDiscount
{
    public function calculateDiscounts(Budget $budget): float
    {
        $discountsChain = new DiscountMoreThanFiveItems(
            new DiscountMoreThanSixtyValue(new DiscountEmpty())
        );

        $discountCalculate = $discountsChain->discountCalculate($budget);

        $discountLog = new DiscountLog();
        $discountLog->insert($discountCalculate);

        return $discountCalculate;
    }
}
