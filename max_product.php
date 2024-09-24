<?php
$publications = [
    ['type' => 'book', 'title' => 'PHP for Beginners', 'year' => 2020, 'author' => 'John Doe', 'volume' => 300],
    ['type' => 'newspaper', 'title' => 'Daily News', 'date' => '2023-09-15', 'editor' => 'Jane Smith', 'volume' => 15],
    ['type' => 'magazine', 'title' => 'Tech World', 'date' => '2023-08-10', 'editorial' => 'Tech Editors', 'volume' => 50]
];

$year = 2023; // Заданный год

echo "<h3>Издания, вышедшие в $year году:</h3>";
foreach ($publications as $pub) {
    if (($pub['type'] == 'book' && $pub['year'] == $year) || ($pub['type'] != 'book' && strpos($pub['date'], (string)$year) === 0)) {
        echo "<p>";
        echo "Название: {$pub['title']}<br>";
        if ($pub['type'] == 'book') {
            echo "Год выпуска: {$pub['year']}<br>";
            echo "Автор: {$pub['author']}<br>";
        } else {
            echo "Дата выпуска: {$pub['date']}<br>";
            echo $pub['type'] == 'newspaper' ? "Редактор: {$pub['editor']}<br>" : "Редколлегия: {$pub['editorial']}<br>";
        }
        echo "Объем: {$pub['volume']} страниц<br>";
        echo "</p>";
    }
}
?>
