<?php

//FrontController:

session_start();

define("ROOT", dirname(__FILE__));

// Авторизация пользователей:

$user = "Guest";

// DB conection:

require(ROOT."/system/config/db_config.php");
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Маршрутизация:

require(ROOT."/system/components/Router.php");
$router = new Router();
$router->run();

// Подключение базового шаблона:

include(ROOT."/public/templates/base.php");
