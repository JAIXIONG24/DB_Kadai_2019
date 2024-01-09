<?php

// My SQL データベースの接続
define('DB_DATABASE','db2019');
define('DB_USERNAME','db2019');
define('DB_PASSWORD','db2019-pass');
define('PDO_DSN','mysql:dbhost=tbsed.info.yuge.ac.jp;dbname=db2019');

try{
    $dbh=new PDO(PDO_DSN , DB_USERNAME , DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->query('SET NAMES utf8'); //文字化けの解消
}catch(PDOException $e){
    echo $e->getMessage();
    exit();
}

$id=$_POST['id'];
$date=$_POST['date'];
$week=$_POST['week'];

$query="insert into doctor02(ID,Date,Week) values($id,$date,'$week')";
//echo $query;
$stmt = $dbh->query($query);


?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>医者仕事表登録完了</title>
</head>
<body>
<h4>医者仕事表登録完了しました．</h4>

<?
    echo "医者のID： $id <br>";
    echo "日付： $date <br>";
    echo "週間： $week <br>";
?>
<p>
<a href="index.php">トップページに戻る</a>
</p>

</body>
</html>
