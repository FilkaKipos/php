<?php
echo "<h3>Таблица умножения для восьмеричной системы счисления</h3>";
echo "<table border='1'>";
for ($i = 1; $i <= 7; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 7; $j++) {
        $product = base_convert($i * $j, 10, 8);
        echo "<td style='padding: 5px;'>$i × $j = $product</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
