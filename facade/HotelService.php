<?php


class HotelService
{
    public function getName($name)
    {
        echo "Name hotel: " . $name . "\n";
    }

    public function getDate($start, $end)
    {
        echo "Date : " . $start . " - " . $end . "\n";
    }
}