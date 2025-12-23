<?php
  declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Функция </title>
</head>
<body>
	<h1>Функция</h1>
	<?php
	/**
     * Меняет местами значения двух переменных
     * 
     * Функция принимает две переменные по ссылке и меняет их значения местами
     * с использованием временной переменной $temp.
     * 
     * @param mixed &$x Первая переменная для обмена (передается по ссылке)
     * @param mixed &$y Вторая переменная для обмена (передается по ссылке)
     * @return void
     */
    
	$swap = function (&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
};
$a = 5;
$b = 8;
$swap($a, $b);
echo '5 === $b: ', (5 === $b) ? 'true' : 'false';
echo "<br>";
echo '8 === $a: ', (8 === $a) ? 'true' : 'false';

	?>
</body>
</html>