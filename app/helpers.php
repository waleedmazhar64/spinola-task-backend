<?php

    function factorial($number){
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++){
        $factorial = $factorial * $i;
        }
        return $factorial;
    }