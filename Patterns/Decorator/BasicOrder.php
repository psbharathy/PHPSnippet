<?php

// Common Interface
// Prerequisite: When to use Interface
Interface OrderService
{
    public function getTotal();
}

// Core Service Class
Class BasicOrder implements OrderService
{
    public function getTotal()
    {
       return 20;
    }
}

// Decorator Class
Class Shipping implements OrderService
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService  = $orderService;
    }

    public function getTotal()
    {
       return 20 + $this->orderService->getTotal();
    }
}

Class OneDayDelivary implements OrderService
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService  = $orderService;
    }

    public function getTotal()
    {
       return 20 + $this->orderService->getTotal();
    }
}

echo (new Shipping (new BasicOrder()))->getTotal();

echo (new OneDayDelivary(new Shipping (new BasicOrder())))->getTotal();

echo (new OneDayDelivary(new BasicOrder()))->getTotal();

