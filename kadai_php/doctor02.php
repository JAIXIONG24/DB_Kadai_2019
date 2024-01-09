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
           <th>Date</th>
           <th>Week</th>
           </tr>";

    foreach($rec2 as $row){
        //変数への格納
        $id = $row['ID'];
        $date = $row['Date'];
        $week = $row['week'];

        //出力
        echo "<tr><td>$id </td>";
        echo "<td>$date </td>";
        echo "<td>$week </td>
        </tr>\n";
    }

    echo "</table>";
}else{
  echo "情報がない";
}
?>

<p>
<a href = "regist001.php">登録ページへ</a>
</p>

</body>
</html>
