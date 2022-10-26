<?php

namespace App\Services;

class GenerateOrderCommand
{
    private float $budgetValue;
    private int $itemsQuantity;
    private string $clientName;

    public function __construct(
        float $budgetValue,
        int $itemsQuantity,
        string $clientName
    ) {
        $this->budgetValue = $budgetValue;
        $this->itemsQuantity = $itemsQuantity;
        $this->clientName = $clientName;
    }

    public function getBucketValue()
    {
        return $this->budgetValue;
    }

    public function getItemsQuantity()
    {
        return $this->itemsQuantity;
    }

    public function getClientName()
    {
        return $this->clientName;
    }
}
