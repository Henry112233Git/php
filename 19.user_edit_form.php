<title>修改使用者</title>
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
    <h1>這是PHP的修改使用者介面</h1>
</div>
<div class="php測試資訊">
<p></p>
<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號，不然就無法讓你修改使用者";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <center><input type=submit value=修改></center>
        </form>
        ";
    }

?>
<p></p>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    <center>就是將登入系統的表單拿來這邊做套用，這次我們不一樣，<br>
    雖然可以看見你要修改的帳號和密碼，但是我們修改使用者不允許修改帳號，只能修改密碼，<br>
    就有點類似重設密碼</center><p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>