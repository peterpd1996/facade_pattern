<?php


class ContactService
{
    public function contactByEmail($email)
    {
        echo "Contact via email: " . $email . "\n";
    }

    public function contactBySMS($phone)
    {
        echo "Contact via phone: ". $phone . "\n";
    }
}