<title>結果：新增使用者</title>
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
    <h1>這是PHP的執行新增使用者結果</h1>
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

   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   #新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}

?>
<p></p>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    <center>在登入系統可以執行登入成功的話，那當然新增資料庫也可以套用mydb、if函數的指令來做新增<br>
    用 select into 尋找有與 user(id,pwd) 相關的資料表，並且送出我所輸入的帳號和密碼</center><p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>