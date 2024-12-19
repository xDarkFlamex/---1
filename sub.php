<?php

function subtract($a, $b) {
    return $a - $b;
}

echo "Введите два числа для вычитания:\n";
list($number1, $number2) = inputNumbers();
$result = subtract($number1, $number2);
echo "Результат вычитания: $result\n";

?>