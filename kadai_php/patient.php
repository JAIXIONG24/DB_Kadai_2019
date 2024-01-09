<!DOCTYPE html>
<html lang = "ja">
<head>
<title>医者の記録簿</title>
</head>
<body>
<h4>医者の記録簿</h4>

<?php

if($_POST['C_box']){

    $query="select * from  doctor01 where ID = '$_POST[id]'";
    // 表示してSQLを確認 echo $query;
    $stmt = $dbh->query($query);
    $rec2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border = '1'>";
    echo "<tr>
           <th>ID</th>
           <th>Class</th>
           <th>Disease</th>
           <th>Drug</th>
           <th>Current</th>
           <th>N_ID</th>
           <th>Date</th>
           <th>Sex</th>
           </tr>";

    foreach($rec2 as $row){
        //変数への格納
        $id = $row['ID'];
        $class = $row['Class'];
        $disease = $row['Disease'];
        $drug = $row['Drug'];
        $current = $row['Current'];
        $n_id = $row['N_ID'];
        $date = $row['Date'];
        $sex = $row['Sex'];
        //出力
        echo "<tr><td>$id </td>";
        echo "<td>$class </td>";
        echo "<td>$disease </td>";
        echo "<td>$drug </td>";
        echo "<td>$current </td>";
        echo "<td>$n_id </td>";
        echo "<td>$date </td>";
        echo "<td>$sex </td></tr>\n";
    }

    echo "</table>";
}else{
  echo "情報がない";
}
?>

<p>
<a href = "regist03.php">登録ページへ</a>
</p>

</body>
</html>
