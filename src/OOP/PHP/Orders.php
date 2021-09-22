<?php

namespace App\OOP\PHP;

class Orders
{
    private string $source;
    private string $destination;
    private int $weight;

    public function deliverOrders(Car $car): string
    {
        return "i am deliver from {$this->source} to {$this->destination} of wieght {$this->weight} kg";
    }
}
