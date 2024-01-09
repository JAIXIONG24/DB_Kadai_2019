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

$query="select * from patient";
$stmt = $dbh->query($query);
$rec = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>患者登録</title>
</head>
<body>
<h4>患者登録</h4>

<table border="1">
<tr>
  <th>ID</th>
  <th>Room</th>
  <th>Disease</th>
  <th>Drug</th>
  <th>Current</th>
  <th>N_ID</th>
  <th>Date</th>
  <th>Sex</th>
</tr>

<?php
    foreach ($rec as $row){
        //変数への格納
        $id = $row['ID'];
        $room = $row['Room'];
        $disease = $row['Disease'];
        $drug = $row['Drug'];
        $current = $row['Current'];
        $n_id = $row['N_ID'];
        $date = $row['Date'];
        $sex = $row['Sex'];
        //出力
        echo "<tr><td>$id </td>";
        echo "<td>$class </td>";
        echo "<td>$disease </td>";
        echo "<td>$drug </td>";
        echo "<td>$current </td>";
        echo "<td>$n_id </td>";
        echo "<td>$date </td>";
        echo "<td>$sex </td></tr>\n";
    }
?>

</table>
<p>
患者の登録をします．次の項目を半角で入力してください．
<form action = "" method = "post">
患者のID：<input type="text" name = "id" size = "10">
部屋：<input type = "text" name = "room" size = "10">
病気名：<input type = "text" name = "desease" size = "10">
薬：<input type = "text" name = "drug" size = "10">
状態：<input type = "text" name = "current" size = "10">
患者のID：<input type = "text" name = "n_id" size = "10">
日付：<input type = "text" name = "date" size = "10">
性別：<input type = "text" name = "sex" size = "10">

<input type = "submit" name = "A1" value = "登録">
</form>


</body>
</html>
