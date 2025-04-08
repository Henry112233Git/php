<title>瀏覽人數</title>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的瀏覽人數查詢</h1>
</div>
<div class="php測試資訊">
<center>
<p>
<?php
      session_start();
      if (!isset($_SESSION["counter"])) /*名稱是否存在*/
          $_SESSION["counter"]=1;
      else
          $_SESSION["counter"]++;
  
      echo "瀏覽人數=".$_SESSION["counter"];
      echo '<br><a href="9.reset_counter.php"> 重置counter</a>';
?>
</a>
</p>
</center>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    使用if函數判別$_SESSION["counter"]是否沒有被設定過，沒有設定將設為1，否則累加<p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>