<?php

namespace App\Services\Discounts;

class DiscountLog
{
    public function insert(float $discountCalculate): void
    {
        echo 'Saving log ...' . $discountCalculate;
    }
}