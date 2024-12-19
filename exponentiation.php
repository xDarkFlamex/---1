
<?php

function exponentiate($a, $b) {
    return pow($a, $b);
}

echo "Введите число и степень для возведения:\n";
list($number1, $number2) = inputNumbers();
$result = exponentiate($number1, $number2);
echo "Результат возведения в степень: $result\n";

?>
