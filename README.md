<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Тестовое задание:

Сделать форму обратной связи.
При сохранении заявки использовать паттерн фабрика.
Реализовать структуру, чтобы можно было добавлять новые места для хранения заявок, например другая база данных или
email.
Изначально реализовать сохранение в базу и в файл. Саму структуру базы можно не делать.

Поля: имя, телефон, само обращение. Валидация данных на бекенде.

## Что необходимо использовать:

- PHP от 7.4
- Фреймворк Laravel
- ООП (для создания заявки и места для хранения заявки)
- Vuejs

About App

Скопируйте файл .env.example и переименуйте его в .env или добавте следующие переменные окружения:

```bash
FEEDBACK_STORAGE_DATABASE=false
FEEDBACK_STORAGE_FILE=true
FEEDBACK_FILE_STORAGE_PATH=feedbacks.json
```
