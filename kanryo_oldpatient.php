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

$n_id = $_POST['n_id'];
$name = $_POST['name'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$date = $_POST['date'];
$tel = $_POST['tel'];
$state = $_POST['state'];
$sex = $_POST['sex'];

$query = "insert into oldpatient(Name,Birthday,Date,Address,Tel,State,Sex,N_ID) values('$name','$birthday','$date','$address','$tel','$state','$sex','$n_id')";
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

<?php

echo "名前： $name <br>";
echo "生年月日： $birthday <br>";
echo "日付： $date <br>";
echo "住所： $address <br>";
echo "性別： $sex <br>";
echo "状態： $state <br>";
echo "電話番号： $tel <br>";
echo "患者のID： $id <br>";
?>
<p>
<a href = "indexi18102.php">トップページに戻る</a>
</p>

</body>
</html>
