<?php


class DiscountService
{
    public function apply()
    {
        echo "You get " . rand(5, 10) . "% off\n";
    }
}