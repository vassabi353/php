<?php
declare(strict_types=1);

namespace MyProject\Classes;

/**
 * Класс User представляет пользователя системы
 * 
 * @package MyProject\Classes
 */
class User {
    /**
     * Имя пользователя
     * 
     * @var string
     */
    public $name;
    
    /**
     * Логин пользователя для входа в систему
     * 
     * @var string
     */
    public $login;
    
    /**
     * Пароль пользователя
     * 
     * @var string
     * @access private
     */
    private $password;

    /**
     * Конструктор класса User
     * 
     * @param string $name Имя пользователя
     * @param string $login Логин пользователя для аутентификации
     * @param string $password Пароль пользователя (будет храниться в приватном свойстве)
     */
    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * Получает базовую информацию о пользователе
     * @return array Ассоциативный массив с информацией о пользователе:
     *               - name: Имя пользователя
     *               - login: Логин пользователя
     */
    public function getInfo() {
        return [
            'name' => $this->name,
            'login' => $this->login
        ];
    }

    /**
     * Деструктор класса User
     * 
     * Вызывается автоматически при уничтожении объекта.
     * Выводит сообщение об удалении пользователя.
     * 
     * @return void
     */
    public function __destruct() {
        echo "<div class='destruct-message'>Пользователь {$this->login} удалён.</div>";
    }
}
