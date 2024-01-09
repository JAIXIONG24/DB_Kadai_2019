?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<title>患者の記録簿</title>
</head>
<body>

<?php
if($_POST['A3']){

    $query = "select * from  oldpatient where N_ID = '$_POST[n_id]'";
    // 表示してSQLを確認 echo $query;
    $stmt = $dbh->query($query);
    $rec2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border = '1'>";
    echo "<tr>
           <th>ID</th>
           <th>Name</th>
           <th>Brithday</th>
           <th>Date</th>
           <th>Address</th>
           <th>Tel</th>
           <th>State</th>
           <th>Sex</th>
           <th>N_ID</th>
           </tr>";

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
