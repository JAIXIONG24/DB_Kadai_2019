<!DOCTYPE html>
<html lang="ja">
<head>
<title>患者登録確認</title>
</head>
<body>
<h1>患者登録確認</h1>

<?php

if($_POST['id'] && $_POST['room'] && $_POST['disease']
&& $_POST['drug'] && $_POST['sex']&& $_POST['date'] && $_POST['n_id']){
    $id = $_POST['id'];
    $room = $_POST['room'];
    $disease = $_POST['disease'];
    $drug = $_POST['drug'];
    $n_id = $_POST['n_id'];
    $date = $_POST['date'];
    $sex = $_POST['sex'];

    echo "患者のID： $id <br>";
    echo "部屋： $room <br>";
    echo "病気名： $disease <br>";
    echo "薬： $drug <br>";
    echo "患者のカウント： $n_id <br>";　// don't know what to write is good for
    echo "日付： $date <br>";
    echo "性別： $sex <br>";

?>

以上の内容で登録してよろしいですか．
<form action="kanryo.php" method="post">
<p>
<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<input type = "hidden" name = "room" value = "<?php echo $room; ?>">
<input type = "hidden" name = "disease" value = "<?php echo $disease; ?>">
<input type = "hidden" name = "drug" value = "<?php echo $drug; ?>">
<input type = "hidden" name = "n_id" value = "<?php echo $n_id; ?>">
<input type = "hidden" name = "date" value = "<?php echo $date; ?>">
<input type = "hidden" name = "sex" value = "<?php echo $sex; ?>">

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
