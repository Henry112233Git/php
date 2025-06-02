<title>新增使用者</title>
<style>
    tr td {
        background-color: white;
        border: 1px solid lightcyan;
    }
    table a {
        text-decoration: none;
    }
</style>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的新增使用者介面</h1>
</div>
<div class="php測試資訊">
<p></p>
<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號，不然就不會讓你新增使用者";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    
    echo "
        <form action=15.user_add.php method=post>
            帳號：<input type=text name=id><br>
            密碼：<input type=text name=pwd><p></p>
            <center><input type=submit value=新增> <input type=reset value=清除></center>
        </form>
    ";
}

?>
<p></p>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    就是將登入系統的表單拿來這邊做套用，不過這次表單要用text，以便看見你要新增的帳號和密碼<p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>