<?php

function inputNumbers() {
    echo "Введите первое число: ";
    $handle = fopen("php://stdin", "r");
    $number1 = trim(fgets($handle));

    echo "Введите второе число: ";
    $number2 = trim(fgets($handle));

    return [$number1, $number2];
}

list($number1, $number2) = inputNumbers();
echo "Числа введены: $number1 и $number2\n";

?>