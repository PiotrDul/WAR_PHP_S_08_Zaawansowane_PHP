<?php

function divide($divider, $dividend)
{
    if ($divider == 0) {
        throw new InvalidArgumentException("Divide by zero error");
    }

    if ($divider < 0) {
        throw new OutOfRangeException ("Divide is lover then zero");
    }

    return $dividend / $divider;
}

function randomDivide($tryNumber)
{
    for ($n = 0; $n < $tryNumber; $n++) {
        echo divide(mt_rand(0, 20) === 0 ? 0 : 5, rand(-10, 10)).'</br>';
    }
}