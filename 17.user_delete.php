<title>結果：刪除使用者</title>
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
    <h1>這是PHP的刪除使用者介面</h1>
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
        $sql="delete from user where id='{$_GET["id"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
    }

?>
<p></p>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    <center>在登入系統可以執行登入成功的話，那當然刪除資料庫也可以套用mydb、if函數的指令來做刪除<br>
    用 delete from 尋找有與 user 相關的資料表，尋找要刪除的帳號</center><p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>