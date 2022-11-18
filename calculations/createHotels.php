<?php

function createHotels($url)
{

    $_SESSION['hotels'] = [];
    $hotelData = json_decode(file_get_contents($url));

    foreach ($hotelData as $data) {

        $newHotel = new Hotel(
            $data->id,
            $data->name,
            $data->rate,
            $data->features,
            $data->thumbnail
        );

        array_push($_SESSION['hotels'], $newHotel);
    }
}
