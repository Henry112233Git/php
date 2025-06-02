<title>結果：修改使用者</title>
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
    <h1>這是PHP的執行修改使用者結果</h1>
</div>
<div class="php測試資訊">
<p></p>
<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{   
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
        echo "修改錯誤";
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }else{
        echo "修改成功，三秒鐘後回到網頁";
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }
}

?>
<p></p>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    <center>利用 update 方式，來更新資料表</center><p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>