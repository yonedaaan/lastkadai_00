<?php
// データベースに接続
function connectDB() {
    $param = 'mysql:dbname=images;host=localhost';
    try {
        $pdo = new PDO($param, 'root', 'root');
        return $pdo;

    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
}
?>