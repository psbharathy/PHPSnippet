<?php

// Common Interface
// Prerequisite: When to use Interface
Interface OrderService
{
    public function getTotal();

    public function getDetails();
}

// Core Service Class
Class BasicOrder implements OrderService
{
    public function getTotal()
    {
       return 20;
    }

    public function getDetails()
    {

      return 'Basic Order';
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

    public function getDetails()
    {

      return $this->orderService->getDetails().', and Shipping Cost';
    }
}

Class OneDayDelivery implements OrderService
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

    public function getDetails()
    {

      return $this->orderService->getDetails().', and One Day Delivery Cost';
    }
}

// echo (new Shipping (new BasicOrder()))->getTotal();
echo "\n";
// echo (new OneDayDelivery(new Shipping (new BasicOrder())))->getTotal();
echo "\n";
// echo (new OneDayDelivery(new BasicOrder()))->getTotal();
echo "\n";
echo (new Shipping (new BasicOrder()))->getDetails();
echo "\n";
echo (new OneDayDelivery(new BasicOrder()))->getDetails();
echo "\n";
