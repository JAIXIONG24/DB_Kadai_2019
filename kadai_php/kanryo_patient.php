<?php

// My SQL データベースの接続
define('DB_DATABASE','db2019');
define('DB_USERNAME','db2019');
define('DB_PASSWORD','db2019-pass');
define('PDO_DSN','mysql:dbhost=tbsed.info.yuge.ac.jp;dbname=db2019');

try{
    $dbh = new PDO(PDO_DSN , DB_USERNAME , DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->query('SET NAMES utf8'); //文字化けの解消
}catch(PDOException $e){
    echo $e->getMessage();
    exit();
}

$id = $_POST['id'];
$room = $_POST['room'];
$disease = $_POST['disease'];
$drug = $_POST['drug'];
$current = $_POST['current'];
$n_id = $_POST['n_id'];
$sex = $_POST['sex'];
$tel = $_POST['tel'];

$query = "insert into doctor01(ID,Name,Birthday,Date,Address,Tel,Sex) values('$id','$room','$disease','$drug','$current','$n_id','$date','$sex')";
//echo $query;
$stmt = $dbh->query($query);


?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<title>患者登録完了</title>
</head>
<body>
<h4>患者登録完了しました．</h4>

<?
echo "患者のID： $id <br>";
echo "部屋： $room <br>";
echo "病気名： $disease <br>";
echo "薬： $drug <br>";
echo "状態： $current <br>";
echo "患者のカウント： $n_id <br>";　// don't know what to write is good for
echo "日付： $date <br>";
echo "性別： $sex <br>";
?>
<p>
<a href = "index.php">トップページに戻る</a>
</p>

</body>
</html>
