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
$n_id=$_POST['n_id'];


$query="delete from doctor02 where ID = '$_POST[id]'";
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
        form{
          text-align: center;
          font-size: 20px;

        }

</style>
<p>
<?php
    echo "ID： $id <br>";
    echo "日付： $date <br>";
    echo "曜日： $week <br>";
    echo "医者のID： $n_id <br>";
?>
</p>
<p>
  <form action = "regist_doctor02.php" method = "post">
  <input type = "submit" name = "display02" value = "戻る"
  style="height:25px; width:50px;font-size: 15px;background-color: #1e90ff;color:white;" ><br>
  </form>
</p>

</body>
</html>
