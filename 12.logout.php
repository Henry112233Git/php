<title>登出結果</title>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的登出結果</h1>
</div>
<div class="php測試資訊">
<center>
<p>
<?php
    session_start();
    unset($_SESSION["id"]);
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>
</a>
</p>
</center>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    套用重置網站範本，來做登出之動作<p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>