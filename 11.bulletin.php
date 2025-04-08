<title>佈告欄</title>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的佈告欄</h1>
</div>
<div class="php測試資訊">
<center>
<p>
<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "你沒有登入，是看不到我的佈告欄喔，3秒回登入系統";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";
    }
?>
</p>
</center>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    <center>
    複習第七個檔案的內容，為了不讓各位在未登入的情況下看到佈告欄的內容，<br>所以必須要用if函數辨別是有沒有登入<p></p>
    </center>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>
