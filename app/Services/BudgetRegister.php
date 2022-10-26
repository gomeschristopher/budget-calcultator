<?php

namespace App\Services;

use App\Models\Budget;
use App\Services\Http\HttpAdapter;

class BudgetRegister
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function register(Budget $budget): void
    {
        $this->http->post('http://api.budget.register', [
            'budgetValue' => $budget->value,
            'budgetItemsQuantity' => $budget->itemsQuantity
        ]);
    }
}