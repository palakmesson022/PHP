<?php

    $year = 2014;
    
    // Leap years are divisible by 400 or by 4 but not 100
    if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
    {
        echo "$year is a leap year.";
    }
    else
    {
        echo "$year is not a leap year.";
    }

    echo("<br>This program is written by Prabhav Nasa<br>ERPID-0221BCA011");
?>