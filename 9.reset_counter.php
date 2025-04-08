<title>重置結果</title>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的重置結果</h1>
</div>
<div class="php測試資訊">
<center>
<p>
<?php
    session_start();
    unset($_SESSION["counter"]);
    echo "重置成功···";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>
</a>
</p>
</center>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    用counter名稱將已載入過的$_SESSION["counter"]來使用unset重置設定<p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>