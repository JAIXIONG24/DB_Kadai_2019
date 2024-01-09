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

// $query = "select * from doctor02";
// $stmt = $dbh->query($query);
// $rec = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>医者仕事削除確認</title>
</head>
<body>
<h1>医者仕事削除確認</h1>
<style>
   body{
       background-color: #BCE2E8;
       }

     h1{
        text-align:center;
        }
    form{
          text-align: center;
          font-size: 20px;
        }
      p{
          text-align: center;
          font-size: 20px;

        }


</style>
<p>
<?php

if($_POST['id']){
  $query = "select * from  doctor02 where ID = '$_POST[id]'";
  // 表示してSQLを確認 echo $query;
  $stmt = $dbh->query($query);
  $rec2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach($rec2 as $row){
     $id = $row['ID'];
    $date = $row['Date'];
    $week = $row['Week'];
    $n_id = $row['N_ID'];

    echo "ID： $id <br>";
    echo "日付：$date<br>";
    echo "曜日：$week<br>";
    echo "医者のID：$n_id<br>";
  }

?>
</p>
<p>以上の内容で登録してよろしいですか.</P>
<form action="sakujokanryo_doctor02.php" method="post">
  <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<input type = "hidden" name = "date" value = "<?php echo $date; ?>">
<input type = "hidden" name = "week" value = "<?php echo $week; ?>">
<input type = "hidden" name = "n_id" value = "<?php echo $n_id; ?>">
<input type="submit" name="A50" value="削除" style="height:70px; width:45px;font-size: 20px">
</form>
<p>
<?php

}else{
    echo "IDを入力してください．<br>";
}

?>
</p>
<h4>
<a href="<?php echo $_SERVER['HTTP_REFERER'];?>">戻る</a>
</h4>

</body>
</html>
