<?php

namespace App\Abstraction;

use App\Interfaces\Payment;

abstract class Creator
{
    abstract public function factoryMethod(): Payment;

    public function someOperation(): string
    {
        // Call the factory method to create a Product object.
        $product = $this->factoryMethod();
        // Now, use the product.
        $result = "Creator: The same creator's code has just worked with " .
            $product->operation();

        return $result;
    }
}
