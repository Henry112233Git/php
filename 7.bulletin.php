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
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    $result=mysqli_query($conn, "select * from bulletin");
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
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
    echo "</table>"
?>
</p>
</center>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    1.一般在製作佈告欄都會使用三種語法，用&lt;table&gt;組成架構，&lt;tr&gt;&lt;td&gt;或&lt;th&gt;製作表格欄位<br>
    2.while迴圈套用$row=mysqli_fetch_array($result)，來一一勘查，佈告欄資料表的欄位名稱，將列出在欄位裡面<p></p>
    <!--
    <tr> (表格列) 用來定義一個表格的橫向列（Row）。每一列內部可以包含一個或多個表格儲存格。

    <td> (表格儲存格) 與 <th> (表頭儲存格)

        <td>：用於定義普通儲存格，包含資料內容。

        <th>：用於定義表頭儲存格，通常會加粗且置中顯示，表示標題性質的內容。
    -->
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>
