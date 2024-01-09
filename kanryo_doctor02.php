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

$date=$_POST['date'];
$week=$_POST['week'];
$n_id=$_POST['n_id'];


$query="insert into doctor02(Date,Week,N_Id) values('$date','$week','$n_id')";
//echo $query;
$stmt = $dbh->query($query);


?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>医者仕事表登録完了</title>
</head>
<body>
<h1>医者仕事表登録完了しました．</h1>
<style>
   body{
       background-color: #BCE2E8;
       }

     h1{
        text-align:center;
        }
        p{
          text-align: center;
          font-size: 20px;
        }

</style>
<p>
<?php
    echo "日付： $date <br>";
    echo "曜日： $week <br>";
    echo "医者のID： $n_id <br>";
?>
</p>
<h4>
<a href="regist_doctor02.php">トップページに戻る</a>
</h4>

</body>
</html>
