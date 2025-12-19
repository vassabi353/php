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
	<?php
	function map($array, $callback) {
    $result = [];
    foreach ($array as $item) {
        $result[] = $callback($item);
    }
    return $result;
}

$numbers = [1, 2, 3, 4, 5];

$squares = map($numbers, fn($n) => $n ** 2);

print_r($squares);
	?>
</body>
</html>