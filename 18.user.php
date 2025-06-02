<title>管理使用者</title>
<style>
table {
    border-collapse: collapse;
    width: auto;
}
th {
    background-color: lightblue; /* 標題的背景顏色設為淡藍色 */
    color: white;
    padding: 10px;
    border: 1px solid lightcyan;
}

tr:nth-child(even) {
    background-color: #f2f2f2; /* 偶數行灰色 */
}

tr:nth-child(odd) {
    background-color: white; /* 奇數行白色 */
}

td {
    border: 1px solid lightcyan;
    padding: 8px;
    text-align: center;
}

table a {
    text-decoration: none;
}
</style>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的管理使用者介面</h1>
</div>
<div class="php測試資訊">
<p></p>
<?php

    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "你沒有登入，我是不會讓你觀看使用者名單的，3秒回登入系統";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
            else{   
            echo "<center><h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <p><table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            $result=mysqli_query($conn, "select * from user");
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table></p></center>";
        }
    ?> 
<p></p>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    利用老師之前所教過的mydb、while、bulletin來在這邊做運用<p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>