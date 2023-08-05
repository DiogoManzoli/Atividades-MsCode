<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$produto = 1;

foreach ($array as $key => $value) {
    if ($value % 2 != 0) {
        $produto = $produto * $value;
    }
}

echo $produto;


echo $array[0];



