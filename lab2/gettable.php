<?php
declare(strict_types=1);
function getTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): int
{
    static $count = 0;
    $count++;

    echo "<table>";
    for ($i = 0; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= $cols; $j++) {
            if ($i === 0 && $j === 0) {
                echo "<th></th>";
            } elseif ($i === 0) {
                echo "<th style='background-color: {$color}; font-weight: bold; text-align: center;'>{$j}</th>";
            } elseif ($j === 0) {
                echo "<th style='background-color: {$color}; font-weight: bold; text-align: center;'>{$i}</th>";
            } else {
                echo "<td style='text-align: center;'>" . ($i * $j) . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    return $count;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
    <style>
        table {
            border: 2px solid black;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body> 
    <h1>Таблица умножения</h1>

    <?php
    // ЗАДАНИЕ 3, 5: Вызовы функции с разным количеством параметров
    getTable(5, 5, '#a0d0ff');   // 3 параметра
    getTable(7);                 // 1 параметр 
    getTable(6, 4);              // 2 параметра
    getTable();                  // без параметров

    // Вывод общего числа вызовов
    $totalCalls = getTable(); // ещё один вызов, чтобы получить актуальное значение $count
    echo "<p><strong>Таблица была отрисована: " . ($totalCalls - 1) . "</strong></p>";
    ?>
</body>
</html>