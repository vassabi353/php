# Классы пользователей

## Описание проекта

Проект демонстрирует работу с классами в PHP, включая наследование, пространства имен и автозагрузку классов.

## Созданные классы

### 1. Класс `User` (базовый класс)

**Расположение:** `src/Classes/User.php`

**Свойства:**
- `public string $name` - имя пользователя
- `public string $login` - логин пользователя
- `private string $password` - пароль пользователя (приватное свойство)

**Методы:**
- `__construct(string $name, string $login, string $password)` - конструктор класса
- `showInfo(): void` - вывод информации о пользователе
- `__destruct()` - деструктор, выводит сообщение об удалении пользователя

### 2. Класс `SuperUser` (наследник класса User)

**Расположение:** `src/Classes/SuperUser.php`

**Дополнительное свойство:**
- `public string $role` - роль супер-пользователя

**Методы:**
- `__construct(string $name, string $login, string $password, string $role)` - конструктор с дополнительным параметром role
- `showInfo(): void` - перегруженный метод вывода информации (добавлен вывод роли)

## Особенности реализации

1. **Пространства имен:** Все классы находятся в пространстве имен `App\Classes`
2. **Автозагрузка:** Используется функция `spl_autoload_register` для автоматической загрузки классов
3. **Наследование:** Класс `SuperUser` наследует все свойства и методы класса `User`
4. **Полиморфизм:** Метод `showInfo()` перегружен в классе-наследнике

## Диаграмма классов

![Диаграмма классов](https://www.plantuml.com/plantuml/png/XP5DJiCm38RlUWhYLqYM11S4l0W8Q3o4b1AW5ga5DjA2c_HJ1dRB0GHLauH7gIKK-nO9tYrX8m5lq_qaCwDoxxHl3XH6QUMlSUgPLD_fDTiOl6S_hDFI7jodA5WJSn2q4Xf1E_Jc3l2gI41f0kOFPnIxI4PTJgG8lfvEwMam7vL96TlpTSXWv8z3qAqkUL7_pkGTjQTMMnRfSK3Jb2jDJhKvLYE_F3IeBNtrK_DdffpVtZ1vn9t89SRsrhA1QVElDu9Ihb8Www4mKe4F3nB_ajN1awwA-hwjCKf6dPZ6rvq0flwe_mH6I6V8_i0YpZel4qXnGxVWSGh7W00)

**Код PlantUML для диаграммы:**
```plantuml
@startuml

class User {
  +name : string
  +login : string
  -password : string
  +__construct(name: string, login: string, password: string)
  +showInfo() : void
  +__destruct()
}

class SuperUser {
  +role : string
  +__construct(name: string, login: string, password: string, role: string)
  +showInfo() : void
}

User <|-- SuperUser

@enduml
