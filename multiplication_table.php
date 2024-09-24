<?php
function isPrime($number) {
    if ($number < 2) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

// Пример использования
$test_number = 17;
echo "<h3>Проверка простого числа</h3>";
echo "Число $test_number ";
echo isPrime($test_number) ? "является простым." : "не является простым.";
?>
