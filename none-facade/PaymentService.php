<?php


class PaymentService
{
    public function paymentByBanking()
    {
        echo "Payment by Banking!" . "\n";
    }

    public function paymentByCreditCard()
    {
        echo "Payment by Credit Card!" . "\n";
    }

    public function paymentByPayPal()
    {
        echo "Payment by PayPal!" . "\n";
    }

    public function paymentByCash()
    {
        echo "Payment by Cash" . "\n";
    }
}