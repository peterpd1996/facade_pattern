<?php

include 'AccountService.php';
include 'ContactService.php';
include 'PaymentService.php';
include 'HotelService.php';

class HotelBookerFacade
{
    protected static $instance;

    protected $accountService, $contactService, $paymentService, $hotelService;

    public function __construct()
    {
        $this->accountService = new AccountService();
        $this->contactService = new ContactService();
        $this->paymentService = new PaymentService();
        $this->hotelService = new HotelService();
    }

    public static function getInstance(): HotelBookerFacade
    {
        if(is_null(static::$instance)) {
            static::$instance = new HotelBookerFacade();
        }

        return static::$instance;
    }

    public function bookHotelByPayPalAndContactViaEmail($userName, $email, $hotelName, $start, $end)
    {
        $this->bookHotel($hotelName, $start, $end)
            ->widthEmail($email)
            ->withUserName($userName);
    }

    public function bookHotel($hotelName, $start, $end)
    {
        $this->hotelService->getName($hotelName);
        $this->hotelService->getDate($start, $end);
        $this->paymentService->paymentByPayPal();
        return $this;
    }

    public function withUserName($userName)
    {
        $this->accountService->getName($userName);
        return $this;
    }

    public function widthEmail($email)
    {
        $this->contactService->contactByEmail($email);
        return $this;
    }

}