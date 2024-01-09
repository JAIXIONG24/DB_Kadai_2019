<!DOCTYPE html>
<html lang="ja">
<head>
<title>医者登録確認</title>
</head>
<body>
<h1>医者登録確認</h1>

<?php

if($_POST['id'] && $_POST['name'] && $_POST['address']
&& $_POST['date'] && $_POST['sex']&& $_POST['birthday'] && $_POST['tel']){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    $date = $_POST['date'];
    $sex = $_POST['sex'];
    $tel = $_POST['tel'];

    echo "ID： $id <br>";
    echo "名前： $name <br>";
    echo "住所： $address <br>";
    echo "生年月日： $birthday <br>";
    echo "日付： $date <br>";
    echo "性別： $sex <br>";
    echo "電話番号： $tel <br>";

?>

以上の内容で登録してよろしいですか．
<form action="kanryo.php" method="post">
<p>
<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<input type = "hidden" name = "name" value = "<?php echo $name; ?>">
<input type = "hidden" name = "address" value = "<?php echo $address; ?>">
<input type = "hidden" name = "birthday" value = "<?php echo $birthday; ?>">
<input type = "hidden" name = "date" value = "<?php echo $date; ?>">
<input type = "hidden" name = "sex" value = "<?php echo $sex; ?>">
<input type = "hidden" name = "tel" value = "<?php echo $tel; ?>">
</p>
<input type = "submit" nameb = "A1" value = "登録">
</form>

<?php

}else{
    echo "すべての項目を入力してください．<br>";
}

?>
<p>
<a href = "<?php echo $_SERVER['HTTP_REFERER'];?>">戻る</a>
</p>

</body>
</html>
