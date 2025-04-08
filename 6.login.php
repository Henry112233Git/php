<title>登入結果</title>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的登入結果</h1>
</div>
<div class="php測試資訊">
<center>
<p>
<?php
   session_start();
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE)
     echo "歡迎來到我的網站";
  else
     echo "帳號/密碼錯誤，請重新登入";
?>
</p>
</center>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    1.$login先設定為未開啟的狀態下進行<br>
    2.while裡插入if函數，是否帳號且密碼都有與資料表所呈現的資料相同，再將$login做開啟<br>
    3.開啟完以後再來往while的其他敘述，使用if函數做確認，是否$login有開啟，符合顯示｢歡迎來到我的網站｣<p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>