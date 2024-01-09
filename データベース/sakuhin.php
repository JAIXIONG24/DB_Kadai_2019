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

$query="select * from Teacher";
$stmt = $dbh->query($query);
$rec = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title></title>
</head>

<body>
<h1>Sライン記録ツール</h1>
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
	echo "<td>$junsoku</td>";
  echo "<td>$muhuri</td>";
  echo "<td>$saichi</td></tr>";
    }
?>
</table>
<p>
<form action="#" method="post">
コードを入力してください<input type="text" name="id" size="10">
<input type="submit" name="bt" value="検索">
</form>
</p>

<?php
// if($_POST['bt']){
//   $query="select * from Class natural join Teacher where TNO='$_POST[id]'";
//   // 表示してSQLを確認 echo $query;
//   $stmt = $dbh->query($query);
//   $rec2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // echo "<table border='1'>";
  // echo "<tr><th>ID</th><th>Name</th><th>Belong</th><th>Prefecture</th><th>Section</th></tr>";

  //foreach ($rec2 as $row){
    //変数への格納
    // $ID=$row['ID'];
    // $Name=$row['Name'];
    // $Belong=$row['S'];
    // $Prefecture=$row['saisoku'];
    // $Section=$row['junsoku'];
    // $Section=$row['muhuri'];
    // $Section=$row['saichi'];
    //出力
    // echo "<tr><td>$ID</td>";
    // echo "<td>$Name</td>";
    // echo "<td>$S</td>";
    // echo "<td>$saisoku</td>";
    // echo "<td>$junsoku</td></tr>";
    // echo "<td>$muhuri</td></tr>"
    // echo "<td>$saichi</td></tr>"
//   }
//
//   echo "</table>";
// }
?>


<p>
<a href="regist.php">登録ページへ</a>
<a href="sakujo.php">登録ページへ</a>
</p>
</body>
</html>
