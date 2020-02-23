<?php
include 'HotelBookerFacade.php';

HotelBookerFacade::getInstance()->bookHotelByPayPalAndContactViaEmail('Hoang Van Sang', 'sang.hv@deha-soft.com', 'Phung An Hotel', '3/2/2020', '10/2/2020');

echo "\n";

HotelBookerFacade::getInstance()->bookHotelByPayPalAndContactViaEmail('Can Tuan Anh', 'anh.ct@deha-soft.com', 'Phuong Thao Hotel', '4/2/2020', '10/2/2020');


HotelBookerFacade::getInstance()
    ->bookHotel('Cali', '1/1', '10/1')
    ->widthEmail('xxx@xxx.xxx');
