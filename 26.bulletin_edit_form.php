<title>修改佈告欄</title>
<style>
table {
    border-collapse: collapse;
    width: 70%;
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
input[type="text"] {
    width: 500;
    height: auto;
    border:none;
    font-size: 16px;
}
textarea {
    width: 500;
    height: 50;
    background-color: #f2f2f2;
    border:none;
    font-size: 16px;
}
input[type="date"] {
    width: 500;
    height: auto;
    border:none;
    background-color: #f2f2f2;
    font-size: 16px;
}
</style>
<link rel="stylesheet" href="套用.css">
<div class="explanation">
    <h1>這是PHP的修改佈告欄介面</h1>
</div>
<div class="php測試資訊">
<p></p>
<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{
        
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");
        $row=mysqli_fetch_array($result);
        $checked1="";
        $checked2="";
        $checked3="";
        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
        echo "
        <html>
            <head><title>修改佈告欄</title></head>
            <body>
            <!--
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            -->
                <table border=1>
                    <form method=post action=27.bulletin_edit.php>
                    <tr>
                        <th>表單標題</th><th>表單內容</th>
                    </tr>
                    <tr>
                        <td>佈告編號</td><td>{$row['bid']}<input type=hidden name=bid value={$row['bid']}></td>
                    </tr>
                    <tr>
                        <td>標題</td><td><input type=text name=title value={$row['title']}></td>
                    </tr>
                    <tr>
                        <td>內容</td><td><textarea name=content rows=20 cols=20>{$row['content']}</textarea></td>
                    </tr>
                    <tr>
                        <td>佈告類型</td>
                        <td>
                            <input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊
                        </td>
                    </tr>
                    <tr>
                        <td>發佈日期</td><td><input type=date name=time value={$row['time']}></td>
                    </tr>
                    <tr>
                        <td>按鈕區域</td><td><input type=submit value=修改佈告> <input type=reset value=清除></td>
                    </tr>
                    </form>
                </table>
            </body>
        </html>
        ";
    }
?>
<p></p>
</div>
<div class=php說明>
    <p><h2>範例說明</h2></p>
    <center><p>本次原本只使用<code>&lt;from&gt;</code>的方式寫出要修改佈告欄的形式<br>
    為了要讓表單更加美觀，使用<code>&lt;table&gt;</code>來體現他的整齊度</p></center>
    <p></p>
</div>
<!--包圍文字說明的區塊-->
<div class="explanation">
    <h3>楊裕鴻 Henry Yang 版權所有 ©2025</h3>
</div>
