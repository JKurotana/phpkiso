<?php 
// 1.データベースに接続する
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// 2.SQL文を実行する
$sql = '';
$stmt = $dbh->prepare($sql)
$stmt->execute();

// 3.データベースを切断する
$dbh = null;
 ?>