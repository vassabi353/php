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
