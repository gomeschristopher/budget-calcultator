<?php

namespace App\Services\Taxes;

use App\Models\Budget;

interface Tax
{
    public function calculateTax(Budget $budget): float;
}