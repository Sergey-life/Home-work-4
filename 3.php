<?php
/**
 * Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.
 */
$array = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($array as $value) {
$square = $value * $value;
$result = $result + $square;
    }
    echo  $result;