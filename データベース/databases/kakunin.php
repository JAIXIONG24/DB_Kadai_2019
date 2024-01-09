<!DOCTYPE html>
<html lang="ja">
<head>
  <title>登録確認</title>
  </head>
  <body>
  <h1>登録確認</h1>

<p>
<?php

if($_POST['ID'] && $_POST['Name']&&$_POST['S']&&$_POST['saisoku'] && $_POST['junsoku']&&$_POST['saichi']&&$_POST['muhuri']){


    $ID = $_POST['ID'];
    $Name = $_POST['Name'];
    $S = $_POST['S'];
    $saisoku = $_POST['saisoku'];
    $junsoku = $_POST['junsoku'];
    $saichi = $_POST['saichi'];
    $muhuri = $_POST['muhuri'];

    echo "ID： $ID <br>";
    echo "名前： $Name <br>";
    echo "S種族値： $S<br>";
    echo "最速： $ID <br>";
    echo "準速： $Name <br>";
    echo "無振り： $S<br>";
    echo "最遅： $S<br>";
?>
</p>
<p>以上の内容で登録してよろしいですか.</P>
  <form action="kanryo.php" method="post">
  <input type = "hidden" name = "ID" value = "<?php echo $ID; ?>">
  <input type = "hidden" name = "Name" value = "<?php echo $Name; ?>">
  <input type = "hidden" name = "S" value = "<?php echo $S; ?>">
  <input type = "hidden" name = "saisoku" value = "<?php echo $saisoku; ?>">
  <input type = "hidden" name = "junsoku" value = "<?php echo $junsoku; ?>">
  <input type = "hidden" name = "muhuri" value = "<?php echo $muhuri; ?>">
  <input type = "hidden" name = "saichi" value = "<?php echo $saichi; ?>">
  <input type="submit" name="A5" value="登録" style="height:90px; width:90px;font-size: 15px">
  </form>
<p>
<?php

}else{
    echo "すべての項目を入力してください．<br>";
}

?>
</p>
<h4>
<a href="<?php echo $_SERVER['HTTP_REFERER'];?>">戻る</a>
</h4>

</body>
</html>
