<!DOCTYPE html>
<html lang="ja">
<head>
<title>医者仕事表登録確認</title>
</head>
<body>
<h1>医者仕事表登録確認</h1>

<?php

if($_POST['id'] && $_POST['date'] && $_POST['week']){

    $id = $_POST['id'];
    $date = $_POST['date'];
    $week = $_POST['week'];
    echo "医者のID： $id <br>";
    echo "日付： $date <br>";
    echo "週間： $week <br>";
?>

以上の内容で登録してよろしいですか．
<form action="kanryo.php" method="post">
<p>
<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<input type = "hidden" name = "date" value = "<?php echo $date; ?>">
<input type = "hidden" name = "week" value = "<?php echo $week; ?>">
</p>
<input type="submit" name="A0" value="登録">
</form>

<?php

}else{
    echo "すべての項目を入力してください．<br>";
}

?>
<p>
<a href="<?php echo $_SERVER['HTTP_REFERER'];?>">戻る</a>
</p>

</body>
</html>
