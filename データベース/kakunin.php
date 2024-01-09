
<!DOCTYPE html>
<html lang="ja">
<title>ポケモン登録確認</title>
<head>
</head>
<body>
<style>
.bt1{
    display: inline-block;
    padding: 0.3em 1em;
    text-decoration: none;
    color: #7d7d7d;
    border: solid 2px #7d7d7d;
    border-radius: 3px;
    transition: .4s;
}
.bt1:hover {
    background: #7d7d7d;
    color: white;
}
</style>
</head>


<?php
if($_POST['ID'] && $_POST['Name']&& $_POST['S']&& $_POST['saisoku']&& $_POST['junsoku']&& $_POST['muhuri']&& $_POST['saichi']{
$ID=$_POST['ID'];
$Name=$_POST['Name'];
$S=$_POST['S'];
$saisoku=$_POST['saisoku'];
$junsoku=$_POST['junsoku'];
$muhuri=$_POST['muhuri'];
$saichi=$_POST['saichi'];

echo "ID :$ID";
echo "名前　：$Name";
echo "S種族値　：$S";
echo "最速　：$saisoku";
echo "準速　：$junsoku";
echo "無振り　：$muhuri";
echo "最遅　：$saichi";
}
?>

<!--
  <center><h1><a href=index.php
style="text-decoration:none;">
Sライン記録</a></h1></center> -->


以上の内容で登録してよろしいですか
<form action="kanryo.php" method="post">
ID：<input type="hidden" name="ID" size="10"><?php echo $ID; ?>">
名前：<input type="hidden" name="Name" size="10"><?php echo $Name; ?>">
S種族値：<input type="hidden" name="S" size="10"><?php echo $S; ?>"><br>
最速：<input type="hidden" name="saisoku" size="10"><?php echo $saisoku; ?>">
準速：<input type="hidden" name="junsoku" size="10"><?php echo $junsoku; ?>">
無振：<input type="hidden" name="muhuri" size="10"><?php echo $muhuri; ?>">
最遅：<input type="hidden" name="saichi" size="10"><?php echo $saichi; ?>">
<input type="submit" name="bt" value="登録">
</form>


<p>
<a href="http://52.156.45.138/~db2019/i15008/sakuhin.php">戻る</a>
</p>

</body>
</html>
