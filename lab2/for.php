<?php
  declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Цикл for</title>
</head>
<body>
	<h1>Цикл for</h1>
	<pre>
<?php
	/*
	ЗАДАНИЕ
	- Используя цикл for выведите в столбик Нечётные числа от 1 до 50
	*/
	
	/**
     * Выводит нечётные числа от 1 до 50 с использованием цикла for
     * 
     * Цикл for инициализирует счётчик $i = 1, выполняет итерации пока $i <= 50,
     * увеличивая $i на 1 каждую итерацию. Внутри цикла проверяется остаток от деления
     * на 2 ($i % 2 != 0), и если число нечётное - выводится в теге <p>.
    */
    
	for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 != 0) {
            echo "<p>$i</p>";
        }
    }
	?>
	</pre>
</body>
</html>