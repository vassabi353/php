<?php
  declare(strict_types=1);
  
  /**
   * Генерирует HTML-меню из массива ссылок
   * 
   * Функция создает неупорядоченный список (ul) с элементами меню на основе переданного массива.
   * Каждый элемент массива должен содержать 'link' (текст ссылки) и 'href' (URL).
   * Меню может быть вертикальным или горизонтальным в зависимости от параметра $vertical.
   * Для безопасности используется htmlspecialchars() для экранирования выводимых значений.
   * 
   * @param array $menu Массив элементов меню, каждый элемент должен быть ассоциативным массивом
   *                    с ключами 'link' (текст ссылки) и 'href' (URL-адрес)
   * @param bool $vertical Определяет ориентацию меню:
   *                       true - вертикальное меню (по умолчанию),
   *                       false - горизонтальное меню
   * @return void Функция не возвращает значения, а выводит HTML-код меню напрямую
  */

  function getMenu(array $menu, bool $vertical = true): void
  {
    $class = $vertical ? 'menu' : 'menu horizontal';
    echo "<ul class=\"{$class}\">";
    foreach ($menu as $item) {
        echo "<li><a href='" . htmlspecialchars($item['href']) . "'>" . htmlspecialchars($item['link']) . "</a></li>";
    }
    echo "</ul>";
}

// Массив меню из menu.php
$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <style>
        .menu {
            list-style-type: none;
            margin: 0;	
            padding: 0;
        }

        .horizontal li {
            display: inline;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Меню</h1>
    <?php
    // ЗАДАНИЕ 3: Вертикальное меню (по умолчанию)
    getMenu($leftMenu);

    echo "<hr>";

    // ЗАДАНИЕ 4: Горизонтальное меню
    getMenu($leftMenu, false);
    ?>
</body>
</html>