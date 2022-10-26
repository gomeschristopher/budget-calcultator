<?php

namespace App\Repositories;


class OrderRepository implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        echo 'Saving... OK!';
    }
}