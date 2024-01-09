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
$name = $_POST['name'];
$address = $_POST['address'];
$major = $_POST['major'];
$degree = $_POST['degree'];
$sex = $_POST['sex'];
$tel = $_POST['tel'];

$query = "insert into doctor01(ID,Name,Address,Major,Degree,Tel,Sex,Birthday) values('$id','$name','$address','$major','$degree','$sex','$tel')";
//echo $query;
$stmt = $dbh->query($query);


?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<title>医者登録完了</title>
</head>
<body>
<h4>医者登録完了しました．</h4>

<?
echo "ID： $id <br>";
echo "名前： $name <br>";
echo "住所： $address <br>";
echo "専門： $major <br>";
echo "程度： $degree <br>";
echo "性別： $sex <br>";
echo "電話番号： $tel <br>";
?>
<p>
<a href = "index.php">トップページに戻る</a>
</p>

</body>
</html>
