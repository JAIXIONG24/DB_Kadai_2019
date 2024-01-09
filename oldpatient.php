<?php

// My SQL データベースの接続
define('DB_DATABASE','db2019');
define('DB_USERNAME','db2019');
define('DB_PASSWORD','db2019-pass');
define('PDO_DSN','mysql:dbhost=tbsed.info.yuge.ac.jp;dbname=db2019');

try{
    $dbh = new PDO(PDO_DSN , DB_USERNAME , DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->query('SET NAMES utf8'); //文字化けの解消
}catch(PDOException $e){
    echo $e->getMessage();
    exit();
}

?>

<!DOCTYPE html>
<html lang = "ja">
<head>
<title>医者の記録簿</title>
</head>
<body>
<h4>新入院の記録簿</h4>

<?php
if($_POST['A3']){

    $query = "select * from  oldpatient where ID = '$_POST[id]'";
    // 表示してSQLを確認 echo $query;
    $stmt = $dbh->query($query);
    $rec2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border = '1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Brithday</th><th>Date</th><th>Address</th><th>Tel</th><th>State</th><th>Sex</th><th>N_ID</th></tr>";

    foreach($rec2 as $row){
        //変数への格納
        $id = $row['ID'];
        $name = $row['Name'];
        $address = $row['Address'];
        $date = $row['Date'];
        $tel = $row['Tel'];
        $state = $row['State'];
        $sex = $row['Sex'];
        $birthday = $row['Birthday'];
        $n_id = $row['N_ID'];
        //出力
        echo "<tr><td>$id </td>";
        echo "<td>$name </td>";
        echo "<td>$Brithday </td>";
        echo "<td>$date </td>";
        echo "<td>$address </td>";
        echo "<td>$tel</td>;
        echo "<td>$state </td>";
        echo "<td>$sex </td>";
        echo "<td>$n_id</td></tr>\n";
    }

    echo "</table>";
}


?>


<p>
<a href = "regist_oldpatient.php">登録ページへ</a>
</p>

</body>
</html>
