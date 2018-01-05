<?php
// Хост (обычно localhost)
$db_host = "212.154.175.4";
// Имя базы данных
$db_name = "maindb2";
// Логин для подключения к базе данных
$db_user = "root";
// Пароль для подключения к базе данных
$db_pass = "TATYANA";

//Подключаемся к базе
$db = mysqli_connect ($db_host, $db_user, $db_pass, $db_name) or die ("Невозможно подключиться к БД");
// Указываем кодировку, в которой будет получена информация из базы
mysqli_query ($db, 'set character_set_results = "utf8"');

