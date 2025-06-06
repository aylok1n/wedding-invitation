<?php
// Устанавливаем правильный Content-Type
header('Content-Type: text/html; charset=utf-8');

// Путь к файлу index.html
$file = __DIR__ . '/index.html';

// Проверяем, существует ли файл
if (file_exists($file)) {
    readfile($file);
} else {
    http_response_code(404);
    echo 'Файл index.html не найден.';
}
?>