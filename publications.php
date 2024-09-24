<?php
$filename = "numbers.txt"; // Название файла
$max_product = 0;
$max_number = 0;

if (file_exists($filename)) {
    $numbers = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($numbers as $number) {
        $digits = str_split(abs($number));
        $product = array_product($digits);
        if ($product > $max_product) {
            $max_product = $product;
            $max_number = $number;
        }
    }
    echo "<h3>Число с максимальным произведением цифр</h3>";
    echo "Число: $max_number, Произведение цифр: $max_product";
} else {
    echo "Файл не найден!";
}
?>
