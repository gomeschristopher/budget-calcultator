<?php

namespace App\Services;

use App\Models\Budget;
use App\Models\Order;
use App\Repositories\OrderRepository;
use SplObserver;

class GenerateOrderHandler implements \SplSubject
{
    private array $actionsAfterGenerateOrder = [];
    public Order $geneatedOrder;

    public function __construct(/** Repositories, MailService */)
    {
        
    }

    public function execute(GenerateOrderCommand $generateOrderCommand)
    {
        
        $budget = new Budget();
        $budget->itemsQuantity = $generateOrderCommand->getItemsQuantity();
        $budget->value = $generateOrderCommand->getBucketValue();

        $order = new Order();
        $order->dataFinished = new \DateTimeImmutable();
        $order->clientName = $generateOrderCommand->getClientName();
        $order->budget = $budget;

        $this->geneatedOrder = $order;
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->actionsAfterGenerateOrder[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        
    }

    public function notify(): void
    {
        foreach ($this->actionsAfterGenerateOrder as $action) {
            $action->update($this);
        }
    }
}