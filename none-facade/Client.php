<?php

include 'AccountService.php';
include 'ContactService.php';
include 'PaymentService.php';
include 'HotelService.php';

$account = new AccountService();
$payment = new PaymentService();
$contact = new ContactService();
$hotel = new HotelService();

$account->getName("Hoang Van Sang");
$hotel->getName('Phung An Hotel');
$hotel->getDate('2/2/2019', '10/2/2019');
$payment->paymentByBanking();
$contact->contactByEmail('sang.hv@deha-soft.com');

echo "\n";

$account1 = new AccountService();
$hotel1 = new HotelService();
$payment1 = new PaymentService();
$contact1 = new ContactService();

$account1->getName("Can Tuan Anh");
$hotel1->getName('Phuong Thao Hotel');
$hotel1->getDate('4/2/2019', '10/2/2019');
$payment1->paymentByBanking();
$contact1->contactByEmail('anh.ct@deha-soft.com');


