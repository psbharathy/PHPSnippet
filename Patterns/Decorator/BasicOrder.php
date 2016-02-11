<?php

Class BasicOrder
{
    public function getTotal()
    {
       return 20;
    }
}

Class BasicOrderAndShipping
{
    public function getTotal()
    {
       return 20 + 15;
    }
}

Class BasicOrderAndShippingAndOneDayDelivary
{
    public function getTotal()
    {
       return 20 + 15 + 50;
    }
}

echo (new BasicOrder)->getTotal();

echo (new BasicOrderAndShipping)->getTotal();

echo (new BasicOrderAndShippingAndOneDayDelivary)->getTotal();