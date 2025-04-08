<title>登入結果</title>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的登入結果</h1>
</div>
<div class="php測試資訊">
<p>
<?php 
    echo $_POST["id"];
    echo "<br>";
    echo $_POST["pwd"];
?>
</p>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    <p>利用$_POST["id"]和$_POST["pwd"]來尋找資料庫內有的帳號及密碼</p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>