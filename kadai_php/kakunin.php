<!DOCTYPE html>
<html lang="ja">
<head>
<title>医者登録確認</title>
</head>
<body>
<h1>医者登録確認</h1>

<?php

if($_POST['nen'] && $_POST['cl'] && $_POST['code']){
    $nen=$_POST['nen'];
    $kurasu=$_POST['cl'];
    $code=$_POST['code'];
    echo "年度： $nen <br>";
    echo "学年： $kurasu <br>";
    echo "教員コード： $code <br>";
?>

以上の内容で登録してよろしいですか．
<form action="kanryo.php" method="post">
<p>
<input type="hidden" name="nen" value="<?php echo $nen; ?>">
<input type="hidden" name="cl" value="<?php echo $kurasu; ?>">
<input type="hidden" name="code" value="<?php echo $code; ?>">
</p>
<input type="submit" name="bt" value="登録">
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
