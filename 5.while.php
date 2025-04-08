<title>While迴圈介紹</title>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的While迴圈介紹</h1>
</div>
<div class="php測試資訊">
<center>
<p>
<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) {
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>
</p>
</center>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    1.mysqli_connect() 建立資料庫連結<br>
    2.mysqli_query() 從資料庫查詢資料<br>
    3.mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來<br>
    4.利用while判斷$row是否可以從資料庫當中能一筆一筆抓出來，符合的話會列出所有id和pwd相關資料<p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>