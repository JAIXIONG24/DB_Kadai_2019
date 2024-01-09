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

$query = "select * from doctor02";
$stmt = $dbh->query($query);
$rec = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<title>医者仕事表登録</title>
</head>
<body>
<h1>医者仕事表登録</h1>
<style>
body{
 background-color: #BCE2E8;
 }
 p{
   text-align: center;
 }
 table{
   margin:auto;
   border-collapse:collapse;
 }
 table th, table td{
   border:solid 1px black;
   text-align: center;
 }
 th{
   color:#FF9800;
   background:#fff5e5;
    padding: 10px;
 }
 td {
   color:black;
   background:white;
   padding: 3px 10px;

 }
form{
text-align: center;
font-size: 20px;

}

 h1{
   text-align:center;
 }
 </style>

<table border="1">
<tr>
  <th>ID</th>
  <th>Date</th>
  <th>Week</th>
  <th>N_ID</th>
</tr>

<?php
    foreach ($rec as $row){
        //変数への格納
        $id = $row['ID'];
        $date = $row['Date'];
        $week = $row['Week'];
        $n_id = $row['N_ID'];

        //出力
        echo "<tr><td>$id </td>";
        echo "<td>$date</td>";
        echo "<td>$week</td>";
        echo "<td>$n_id</td></tr>\n";
    }
?>
</table>
<form action ="sakujokakunin_doctor02.php" method="post"><br>
  医者のID：<input type = "text" name = "id" size = "10"><br>
  <input type = "submit" name = "A50" value = "削除" style="height:70px; width:45px;font-size: 20px"><br>
</form>

<h4>
<a href = "regist_doctor02.php">戻る</a>
</h4>

</body>
</html>
