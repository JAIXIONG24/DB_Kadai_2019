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

$query="select * from oldpatient";
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

  <th>Name</th>
  <th>Brithday</th>
  <th>Date</th>
  <th>Address</th>
  <th>Tel</th>
  <th>State</th>
  <th>Sex</th>
  <th>N_ID</th>
</tr>

<?php
    foreach ($rec as $row){
        //変数への格納

        $name = $row['Name'];
        $address = $row['Address'];
        $date = $row['Date'];
        $birthday = $row['Birthday'];
        $tel = $row['Tel'];
        $state = $row['State'];
        $sex = $row['Sex'];
        $n_id = $row['N_ID'];
        //出力

        echo "<td>$name </td>";
        echo "<td>$brithday </td>";
        echo "<td>$date </td>";
        echo "<td>$address </td>";
        echo "<td>$tel</td>";
        echo "<td>$state </td>";
        echo "<td>$sex </td>";
        echo "<tr><td>$n_id </td>

        </tr>\n";
    }
?>

</table>
<p>
患者の登録をします．次の項目を半角で入力してください．
<form action = "" method = "post">

名前：<input type = "text" name = "name" size = "10"><br>
生年月日：<input type = "text" name = "birthday" size = "10"><br>
日付：<input type = "text" name = "date" size = "10"><br>
住所：<input type = "text" name = "address" size = "10"><br>
電話番号：<input type = "text" name = "tel" size = "10"><br>
状態：<input type = "text" name = "state" size = "10"><br>
性別：<input type = "text" name = "sex" size = "10"><br>
患者のID：<input type="text" name = "n_id" size = "10"><br>
<input type = "submit" name = "A3_box" value = "登録">

</form>


</body>
</html>
