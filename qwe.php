<?php
// Включаем отображение ошибок
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Указываем путь к файлам
$inputFile = 'download.pdf';  // Путь к вашему PDF файлу
$outputFile = 'download.docx'; // Путь, где будет сохранен DOCX файл

// Проверяем, существует ли входной файл
if (!file_exists($inputFile)) {
    die("Файл не найден: $inputFile");
} else {
    echo "Входной файл найден: $inputFile\n";
}

// Формируем команду для конвертации PDF в DOCX
$command = "\"C:\\Program Files\\LibreOffice\\program\\soffice.exe\" --headless --convert-to docx --outdir " . escapeshellarg(dirname($outputFile)) . " " . escapeshellarg($inputFile);

// Выводим команду для отладки
echo "Команда для выполнения: $command\n";

// Выполняем команду
exec($command, $output, $returnVar);

// Проверяем, была ли команда выполнена успешно
if ($returnVar === 0) {
    echo "Конвертация завершена успешно. DOCX файл сохранен по адресу: $outputFile\n";
} else {
    echo "Ошибка при конвертации. Код возврата: $returnVar\n";
    echo "Вывод: " . implode("\n", $output) . "\n";
}
?>