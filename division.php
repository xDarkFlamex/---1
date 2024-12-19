<?php

function divide($a, $b) {
    if ($b == 0) {
        return "Ошибка: Деление на ноль";
    }
    return $a / $b;
}

echo "Введите два числа для деления:\n";
list($number1, $number2) = inputNumbers();
$result = divide($number1, $number2);
echo "Результат деления: $result\n";

?>