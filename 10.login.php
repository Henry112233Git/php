<title>登入結果</title>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的登入結果</h1>
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
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "歡迎來到我的網站";
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    echo "帳號/密碼錯誤，請回登入系統登入";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
</p>
</center>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    <center>
    整合2~6題所弄出來的登入系統<p></p>
    </center>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>