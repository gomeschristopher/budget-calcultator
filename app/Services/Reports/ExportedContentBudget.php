<?php

namespace App\Services\Reports;

use App\Models\Budget;

class ExportedContentBudget implements ExportedContent
{
    private Budget $budget;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;
    }

    public function content(): array
    {
        return [
            'value' => $this->budget->value,
            'itemsQuantity' => $this->budget->itemsQuantity
        ];
    }
}