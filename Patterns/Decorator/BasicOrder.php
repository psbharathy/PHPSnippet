<?php

Interface OrderService
{
    public function getTotal();
}

Class BasicOrder implements OrderService
{
    public function getTotal()
    {
       return 20;
    }
}

Class Shipping implements OrderService
{
    public function getTotal()
    {
       return 20 + 15;
    }
}

Class OneDayDelivary implements OrderService
{
    public function getTotal()
    {
       return 20 + 15 + 50;
    }
}

echo (new BasicOrder())->getTotal();

