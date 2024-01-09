<?php

// My SQL データベースの接続
define('DB_DATABASE','db29');
define('DB_USERNAME','db29');
define('DB_PASSWORD','db29pass');
define('PDO_DSN','mysql:dbhost=tbsed.info.yuge.ac.jp;dbname=db29');

try{
    $dbh=new PDO(PDO_DSN , DB_USERNAME , DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->query('SET NAMES utf8'); //文字化けの解消
}catch(PDOException $e){
    echo $e->getMessage();
    exit();
}

$nen=$_POST['nen'];
$kurasu=$_POST['cl'];
$code=$_POST['code'];

$query="insert into Class(NEN,CLASS,TNO) values($nen,$kurasu,'$code')";
//echo $query;
$stmt = $dbh->query($query);


?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>担任登録完了</title>
</head>
<body>
<h4>担任登録完了しました．</h4>

<?
    echo "年度： $nen <br>";
    echo "学年： $kurasu <br>";
    echo "教員コード： $code <br>";
?>
<p>
<a href="index.php">トップページに戻る</a>
</p>

</body>
</html>
