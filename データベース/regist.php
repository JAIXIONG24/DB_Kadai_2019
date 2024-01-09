<?php

// My SQL データベースの接続
define('DB_DATABASE','db2019');
define('DB_USERNAME','db2019');
define('DB_PASSWORD','db2019-pass');
define('PDO_DSN','mysql:dbhost=52.152.45.138;dbname=db2019');

try{
    $dbh=new PDO(PDO_DSN , DB_USERNAME , DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->query('SET NAMES utf8'); //文字化けの解消
}catch(PDOException $e){
    echo $e->getMessage();
    exit();
}

$query="select * from Teacher";
$stmt = $dbh->query($query);
$rec = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>ポケモン登録</title>
</head>
<body>
<h1>ポケモン登録</h1>

<table border="1">
  <tr>
    <th>ID</th>
    <th>名前</th>
    <th>S種族値</th>
    <th>最速</th>
    <th>準速</th>
    <th>無振り</th>
    <th>最遅</th>
  </tr>

<?php
    foreach ($rec as $row){
        //変数への格納
        $ID=$row['ID'];
      	$Name=$row['Name'];
      	$S=$row['S'];
      	$saisoku=$row['saisoku'];
      	$junsoku=$row['junsoku'];
        $muhuri=$row['muhuri'];
        $saichi=$row['saichi'];
      	//出力
      	echo "<tr><td>$ID</td>";
      	echo "<td>$Name</td>";
      	echo "<td>$S</td>";
      	echo "<td>$saisoku</td>";
      	echo "<td>$junsoku</td>\n";
        echo "<td>$muhuri</td>\n";
        echo "<td>$saichi</td></tr>\n";
    }
?>

</table>
<p>
ポケモンの登録をします．次の項目を半角で入力してください．
<form action="kakunin.php" method="post">
ID：<input type="text" name="ID" size="10">
名前：<input type="text" name="Name" size="10">
S種族値：<input type="text" name="S" size="10"\n>
最速：<input type="text" name="saisoku" size="10">
準速：<input type="text" name="junsoku" size="10">
無振：<input type="text" name="muhuri" size="10">
最遅：<input type="text" name="saichi" size="10">
<input type="submit" name="bt" value="登録">
</form>


</body>
</html>
