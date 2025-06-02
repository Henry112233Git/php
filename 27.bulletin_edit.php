<title>結果：修改佈告欄</title>
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
    <h1>這是PHP的修改佈告欄結果</h1>
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
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }

?>
<p></p>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    利用資料庫所學的更新資料表Update來做修改佈告欄的資料<br>
    這邊不可以使用ALTER TABLE來修改喔，因為那是修改資料表
    <p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>
