<title>登入結果</title>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的登入結果</h1>
</div>
<div class="php測試資訊">
<center>
<p>
<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        echo "登入成功";
    else
        echo "登入失敗";
?>
</p>
</center>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    <center>
    如果ID輸入結果等於John且PWD為John1234<br>
    符合：登入成功<br>
    否則-不符合：登入失敗<p></p>
    </center>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>