<?php
function transformText($text) {
    $lowercase_count = preg_match_all('/[a-z]/', $text);
    $uppercase_count = preg_match_all('/[A-Z]/', $text);

    if ($uppercase_count > $lowercase_count) {
        return strtoupper($text);
    } elseif ($lowercase_count > $uppercase_count) {
        return strtolower($text);
    } else {
        return $text;
    }
}

// Пример использования
$text = "ПрИМеР ТеКсТаааа";
echo "<h3>Преобразованный текст</h3>";
echo transformText($text);
?>
