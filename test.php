<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=image_host', 'username', 'password');
    echo 'Połączenie działa!';
} catch (PDOException $e) {
    echo 'Błąd: ' . $e->getMessage();
}
?>