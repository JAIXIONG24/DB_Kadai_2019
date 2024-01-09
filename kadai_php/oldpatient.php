<!DOCTYPE html>
<html lang = "ja">
<head>
<title>医者の記録簿</title>
</head>
<body>
<h4>新入院の記録簿</h4>

<?php

if($_POST['B_box']){

    $query="select * from  newpatient where ID = '$_POST[id]'";
    // 表示してSQLを確認 echo $query;
    $stmt = $dbh->query($query);
    $rec2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border = '1'>";
    echo "<tr>
           <th>ID</th>
           <th>Name</th>
           <th>Date</th>
           <th>Address</th>
           <th>Brithday</th>
           <th>Sex</th>
           <th>State</th>
           <th>Tel</th>
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
        //出力
        echo "<tr><td>$id </td>";
        echo "<td>$name </td>";
        echo "<td>$date </td>";
        echo "<td>$address </td>";
        echo "<td>$Brithday </td>";
        echo "<td>$sex </td>";
        echo "<td>$state </td>";
        echo "<td>$tel</td></tr>\n";
    }

    echo "</table>";
}else{
  echo "情報がない";
}
?>

<p>
<a href = "regist02.php">登録ページへ</a>
</p>

</body>
</html>
