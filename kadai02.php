<!DOCTYPE html>
<html lang = "ja">
<body>
  <head>
    <meta charset = "UTF-8">
    <title>初めてのHTML</title>
  </head>

  <article>
    <p>検索する住所を詮索してください。</p>
    <form action="" method="POST">
<p>
  <input type ="radio"  name="zip" value ="弓削" checked> 弓削<br>
  <input type ="radio"  name="zip" value = "岩城" > 岩城<br>
  <input type ="radio"  name="zip" value ="生名" > 生名<br>
  <input type ="radio"  name="zip" value ="魚島" > 魚島<br>
  <input type="submit" value="送信する">
</p>

</form>
  </article>

  <?php

if($SERVER['REQUEST_METHOD'=='POST']){
  $name =$_POST['zip'];
  if($name == 'zip'){
    echo"弓削の郵便番号は，794-2501から794-2513です.";
  }elseif($name == 'zip'){
    echo"岩城の郵便番号は, 794-2410 です。";
  }elseif($name == 'zip'){
    echo"生名の郵便番号は, 794-2550 です。";
  }elseif($name == 'zip'){
    echo"魚島の郵便番号は, 794-2540から42 です。";
  }
}
   ?>

</body>
</html>
