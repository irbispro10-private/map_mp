<?php
// показывать сообщения об ошибках
error_reporting(E_ALL);

// установить часовой пояс по умолчанию
date_default_timezone_set("Europe/Moscow");


$key = 'example_key';
$payload = [
    'iss' => 'http://example.org',
    'aud' => 'http://example.com',
    'iat' => 1356999524,
    'nbf' => 1357000000
];

?>