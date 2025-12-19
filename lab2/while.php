<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Цикл while</title>
</head>
<body>
	<h1>Цикл while</h1>
	<?php
	/*
	ЗАДАНИЕ
	- Создайте переменную $var и присвойте ей строковое значение 'ПРИВЕТ'
	- Используя цикл while выведите значение переменной $var в столбик так, 
	  чтобы на выходе в браузере получилось:
	П
	Р
	И
	В
	Е
	Т
	*/
	/**
	 * Создает цикл, который выводит каждый символ строки $var в новой строке.
	 * Используется цикл while для перебора каждого символа строки.
	 */
	
	// Инициализация переменной строкой "ПРИВЕТ"
	$var = "ПРИВЕТ";

	// Создаем индекс для обхода строки
	$i = 0;

	// Получаем длину строки
	$length = mb_strlen($var, "UTF-8");
	
	// Цикл while, который выполняется, пока индекс меньше длины строки
	while ($i < $length) {
	    // Получение текущего символа
	    $char = mb_substr($var, $i, 1, "UTF-8");
	    // Вывод символа
	    echo htmlspecialchars($char) . "<br>";
	    // Увеличиваем индекс для следующей итерации
	    $i++;
	}
	?>
</body>
</html>