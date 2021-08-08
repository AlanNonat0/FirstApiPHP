<?php

define("DB", [
    "DRIVER" => "mysql",
    "NAME" => "db_api_serv",
    "HOST" => "localhost",
    "PORT" => "3306",
    "USER" => "root",
    "PASSWORD" => "root",
    "OPTIONS" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]
]);


