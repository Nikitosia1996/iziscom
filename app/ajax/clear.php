<?php
function deleteDirectoryContainingIndex($directory) {
    // Проверяем, существует ли директория
    if (!is_dir($directory)) {
        echo "Директория не найдена.";
        return;
    }

    // Проверяем, существует ли файл index.php в директории
    $indexPath = $directory . DIRECTORY_SEPARATOR . 'index.php';
    if (file_exists($indexPath)) {
        // Удаляем все файлы и поддиректории в директории
        $files = scandir($directory);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                $filePath = $directory . DIRECTORY_SEPARATOR . $file;
                if (is_dir($filePath)) {
                    // Рекурсивно удаляем поддиректории
                    deleteDirectoryContainingIndex($filePath);
                    rmdir($filePath); // Удаляем пустую директорию
                } else {
                    // Удаляем файл
                    unlink($filePath);
                }
            }
        }
        // Удаляем саму директорию
        rmdir($directory);
        echo "Директория $directory была удалена.<br>";
    } else {
        echo "Файл index.php не найден в директории $directory.<br>";
    }
}

// Пример использования
deleteDirectoryContainingIndex(dirname(dirname(__DIR__))); // Замените на фактический путь к директории
?>