<?php

function add($a, $b) {
    return $a + $b;
}

echo "Введите два числа для сложения:\n";
list($number1, $number2) = inputNumbers();
$result = add($number1, $number2);
echo "Результат сложения: $result\n";

?>