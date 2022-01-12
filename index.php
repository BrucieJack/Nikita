<?php

//1

$num = 0;

while ($num <= 100) {
    echo($num + " ");
    $num++;
}

$num = 0;

while ($num <= 10) {
    if ($num % 2 === 0 && !($num % 3 === 0)) {
        echo($num + " ");
    }
}

//2

$array = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];

