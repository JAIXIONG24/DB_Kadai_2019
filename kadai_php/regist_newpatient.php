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

$query="select * from newpatient";
$stmt = $dbh->query($query);
$rec = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>担任登録</title>
</head>
<body>
<h4>担任登録</h4>

<table border="1">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Date</th>
  <th>Address</th>
  <th>Age</th>
  <th>Brithday</th>
  <th>Sex</th>
  <th>Tel</th>
</tr>

<?php
    foreach ($rec as $row){
        //変数への格納
        $id = $row['ID'];
        $name = $row['Name'];
        $address = $row['Address'];
        $date = $row['Date'];
        $age = $row['Age'];
        $tel = $row['Tel'];
        $sex = $row['Sex'];
        $birthday = $row['Birthday'];
        //出力
        echo "<tr><td>$id </td>";
        echo "<td>$name </td>";
        echo "<td>$date </td>";
        echo "<td>$address </td>";
        echo "<td>$age </td>";
        echo "<td>$Brithday </td>";
        echo "<td>$sex </td>";
        echo "<td>$tel</td></tr>\n";
    }
?>

</table>
<p>
担任の登録をします．次の項目を半角で入力してください．
<form action = "kakunin.php" method = "post">
患者のID：<input type="text" name = "id" size = "10">
名前：<input type = "text" name = "name" size = "10">
日付：<input type = "text" name = "date" size = "10">
住所：<input type = "text" name = "address" size = "10">
年齢：<input type = "text" name = "age" size = "10">
生年月日：<input type = "text" name = "birthday" size = "10">
性別：<input type = "text" name = "sex" size = "10">
電話番号：<input type = "text" name = "tel" size = "10">
<input type = "submit" name = "A1" value = "登録">
</form>


</body>
</html>
