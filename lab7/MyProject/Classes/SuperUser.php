<?php
namespace MyProject\Classes;

use MyProject\Classes\User;

/**
 * @package MyProject\Classes
 * @extends User
 */
class SuperUser extends User {
    /**
     * Роль супер-пользователя в системе
     * 
     * @var string
     */
    public $role;

    /**
     * @param string $name Имя пользователя
     * @param string $login Логин пользователя для входа в систему
     * @param string $password Пароль пользователя
     * @param string $role Роль пользователя в системе 
     */
    public function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }

    /**
     * @return array Ассоциативный массив с информацией о пользователе:
     *               - name: Имя пользователя
     *               - login: Логин пользователя
     *               - password: Хэш пароля 
     *               - role: Роль супер-пользователя
     * @see User::getInfo()
     */
    public function getInfo() {
        $info = parent::getInfo();
        $info['role'] = $this->role;
        return $info;
    }
}
