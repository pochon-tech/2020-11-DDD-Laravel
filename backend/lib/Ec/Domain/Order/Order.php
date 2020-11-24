<?php
namespace Lib\Ec\Domain\Order;

class Order
{
    private string $id; 
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function orderId(): string
    {
        return $this->id;
    }
}