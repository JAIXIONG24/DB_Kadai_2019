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

$query = "select * from doctoc02";
$stmt = $dbh->query($query);
$rec = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<title>医者仕事表登録</title>
</head>
<body>
<h4>医者仕事表登録</h4>

<table border="1">
<tr>
  <th>ID</th>
  <th>Date</th>
  <th>Week</th>
</tr>

<?php
    foreach ($rec as $row){
        //変数への格納
        $id = $row['ID'];
        $date = $row['Date'];
        $week = $row['week'];

        //出力
        echo "<tr><td>$id </td>";
        echo "<td>$date </td>";
        echo "<td>$week </td>
        </tr>\n";
    }
?>

</table>
<p>
担任の登録をします．次の項目を半角で入力してください．
<form action = "kakunin.php" method = "post">
医者のID：<input type = "text" name = "id" size = "10">
日付：<input type = "text" name = "date" size = "10">
週間：<input type = "text" name = "week" size = "10">
<input type = "submit" name = "bt" value = "登録">
</form>


</body>
</html>
