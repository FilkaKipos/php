<!DOCTYPE html>
<html>
<head>
    <title>Стили списков</title>
    <style>
        .style1 li { list-style-type: square; color: blue; }
        .style2 li { list-style-type: circle; color: green; }
        .style3 li { list-style-type: decimal; color: red; }
    </style>
</head>
<body>
    <h3>Выбор стиля оформления списков</h3>
    <form method="post">
        <label>Выберите стиль:</label>
        <select name="style">
            <option value="style1">Стиль 1</option>
            <option value="style2">Стиль 2</option>
            <option value="style3">Стиль 3</option>
        </select>
        <input type="submit" value="Применить">
    </form>
    <ul class="<?php echo isset($_POST['style']) ? $_POST['style'] : 'style1'; ?>">
        <li>Элемент 1</li>
        <li>Элемент 2</li>
        <li>Элемент 3</li>
    </ul>
</body>
</html>
