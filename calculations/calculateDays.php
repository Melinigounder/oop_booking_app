<?php

function calculateDays($date1, $date2)
{

    // Calculating times
    $diff = strtotime($date2) - strtotime($date1);

    //24 hours
    // 24 - 60 -60 = 86400 seconds
    return abs(round($diff / 86400));
}
