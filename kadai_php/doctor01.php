<!DOCTYPE html>
<html lang = "ja">
<head>
<title>医者の記録簿</title>
</head>
<body>
<h4>医者の記録簿</h4>

<?php

if($_POST['A_box']){

    $query="select * from  doctor01 where ID = '$_POST[id]'";
    // 表示してSQLを確認 echo $query;
    $stmt = $dbh->query($query);
    $rec2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border = '1'>";
    echo "<tr>
           <th>ID</th>
           <th>Name</th>
           <th>Address</th>
           <th>Major</th>
           <th>Degree</th>
           <th>Brithday</th>
           <th>Sex</th>
           <th>Tel</th>
           </tr>";

    foreach($rec2 as $row){
        //変数への格納
        $id = $row['ID'];
        $name = $row['Name'];
        $address = $row['Address'];
        $major = $row['Major'];
        $degree = $row['Degree'];
        $tel = $row['Tel'];
        $sex = $row['Sex'];
        $birthday = $row['Birthday'];
        //出力
        echo "<tr><td>$id </td>";
        echo "<td>$name </td>";
        echo "<td>$address </td>";
        echo "<td>$major </td>";
        echo "<td>$degree </td>";
        echo "<td>$tel </td>";
        echo "<td>$sex </td>";
        echo "<td>$Brithday </td></tr>\n";
    }

    echo "</table>";
}else{
  echo "情報がない";
}
?>

<p>
<a href = "regist01.php">登録ページへ</a>
</p>

</body>
</html>
