<?php
    define('USER', 'u0_a188');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'user');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>
