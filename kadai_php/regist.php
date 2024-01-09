<?php

// My SQL データベースの接続
define('DB_DATABASE','db29');
define('DB_USERNAME','db29');
define('DB_PASSWORD','db29pass');
define('PDO_DSN','mysql:dbhost=tbsed.info.yuge.ac.jp;dbname=db29');

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
<title>担任登録</title>
</head>
<body>
<h4>担任登録</h4>

<table border="1">
<tr><th>code</th><th>name</th></tr>

<?php
    foreach ($rec as $row){
        //変数への格納
        $code=$row['TNO'];
        $name=$row['NAME'];
        //出力
        echo "<tr><td>$code </td>";
        echo "<td>$name </td></tr>\n";
    }
?>

</table>
<p>
担任の登録をします．次の項目を半角で入力してください．
<form action="kakunin.php" method="post">
年度：<input type="text" name="nen" size="10">
学年：<input type="text" name="cl" size="10">
教員コード：<input type="text" name="code" size="10">
<input type="submit" name="bt" value="登録">
</form>


</body>
</html>
