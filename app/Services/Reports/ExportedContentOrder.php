<?php

namespace App\Services\Reports;

use App\Models\Order;

class ExportedContentOrder implements ExportedContent
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function content(): array
    {
        return [
            'date_finished' => $this->order->date_finished,
            'client_name' => $this->order->client_name
        ];
    }
}