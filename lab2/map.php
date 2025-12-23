<?php
  declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Функция Map</title>
</head>
<body>
	<h1>Функция Map</h1>
	<?php
	/**
     * Применяет callback-функцию ко всем элементам массива
     * 
     * Функция проходит по каждому элементу входного массива $array,
     * применяет к нему функцию $callback и добавляет результат в новый массив.
     * Исходный массив не изменяется.
     * 
     * @param array $array Исходный массив для обработки
     * @param callable $callback Функция обратного вызова, принимающая один аргумент
     *                           (текущий элемент массива) и возвращающая новое значение
     * @return array Новый массив с результатами применения $callback к каждому элементу $array
     */
    
	function map($array, $callback) {
    $result = [];
    foreach ($array as $item) {
        $result[] = $callback($item);
    }
    return $result;
}

$numbers = [1, 2, 3, 4, 5];

$squares = map($numbers, fn($n) => $n ** 2);

echo "Исходный массив: " . implode(', ', $numbers) . "<br>";
echo "Квадраты чисел: " . implode(', ', $squares) . "\n";
	?>
</body>
</html>