<html>
    <head>
        <meta charset="utf-8">
        <title>immust</title>
        <link rel="stylesheet" id="佈景套用" href="套用.css">
        <link rel="stylesheet" id="首頁" href="首頁.css">
        <link rel="stylesheet" id="其他佈置" href="首頁的其他佈置.css">
        <link rel="stylesheet" id="登入系統" href="登入系統.css">
        <link rel="stylesheet" id="標籤變化" href="標籤變化.css">
        <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
        <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                rtl: true
            });
        });
    </script>
        <link rel="icon" href="path/to/網站台標(只放在索引標籤).png" type="image/x-icon">
        <style>
        /*佈告欄*/
        .news {
            display: flex;
            justify-content: center;
            background-color: rgb(255,204,153);
            width: 70%;
            margin: 0 auto;
            flex-direction: column;
        }
        .news h1{
            padding:10px;
        }
        .news table{
            width: 100%;
            /*border-collapse:collapse;*/
            font-family: 微軟正黑體;
            font-size:16px; 
            border:1px solid #000;
        }
        .news table th{
            background-color: #abdcff;
            color: #ffffff;
        }
        .news table td{
            background-color: #ffffff;
            color: #0396ff;
        }
        body {
          opacity: 0;
          transition: opacity 1.5s ease-in-out;
        }

        /* 加入 class 時觸發淡入 */
        body.fade-in {
          opacity: 1;
        }
        </style>
        <script>
          // 等待 DOM 載入完成後再加上 fade-in 類別
          window.addEventListener('DOMContentLoaded', () => {
            document.body.classList.add('fade-in');
        });
        </script>
    </head>
    <body>  
      <script src="JS/視窗.js"></script>
      <header>
          <div class="1">關於我們</div>
          <div class="2"><img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG"></div>
          <!--- 登入按鈕 -->
          <div class="3" onclick="document.getElementById('login').style.display='block'">
            登入系統
          </div>
          <!-- 登入模態視窗 -->
          <div id="login" class="modal">
          <!-- 新增登入標題 -->
            <span class="login-btn">登入系統</span><span class="close-btn" onclick="closeModal()">&times;</span>
            <!-- 登入表單 -->
            <form method="post" action="10.login.php">
              帳號：<input type="text" name="id"><br />
              密碼：<input type="password" name="pwd"><p></p>
              <input type="submit" value="登入"> <input type="reset" value="清除">
            </form>
          </div>
          <script src="登入系統.js"></script>
      </header>
  <main>
        <div class="nav">
      <ul>
        <li><a href="#">首頁</a></li>
        <li><a href="#introduction">系所簡介</a></li>
        <li  class="dropdown"><a href="#faculty">成員簡介</a>
          <div class="dropdown-content">
              <a href="#faculty">黃老師</a>
              <a href="#faculty">李老師</a>
              <a href="#faculty">應老師</a>
          </div>                       
        </li>
        <li><a href="#about">相關資訊</a></li>
      </ul>
        </div>
        <div class="explanation">
            <h1>歡迎來到裕鴻的官方網站</h1>
        </div>
        </div>
    <center>
    <div class="slider">
      <div class="flexslider">
            <ul class="slides">
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
            </ul>
      </div>
    </div>
    </center>
        <div class="news">
           <center><h1 style="color:Gray">最新公告</h1></center>
            <?php
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
                $result=mysqli_query($conn, "select * from bulletin");
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];
                    echo "</td><td>";
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"];
                    echo "</td><td>";
                    echo $row["content"]; 
                    echo "</td><td>";
                    echo $row["time"];
                    echo "</td></tr>";
                }
                echo "</table>";
            ?>
        </div>
        <div class=php說明>
            <p><h2>說明</h2></p>
            歡迎各位來到我們的官方網站，這是我在整學期所學到的php語法，歡迎大家來參觀<p></p>
        </div>
    <div class="banner" id="introduction">
      <h1>系所簡介</h1>
      <h3>關於資訊管理系</h3>
      <br>本系是結合商業管理、資訊工程的系所，大多數之課程為電腦課
      <br>處理生活上實用的專案程式設計，比如：資料庫、網頁設計、Python
      <br>還結合了人工智慧的應用，讓你生活中遇到無處不在的資訊，提升便利性
    </div>
    <div class="faculty" id="faculty">
      <h2>師資介紹</h2>
            <div class="container">
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
  </div>
  <div class="contact" id="about">
    <h2>聯絡資訊</h2>
    <div class="infos">
      <div class="left">
        <b>明新科技大學管理學院大樓二樓</b>
        <span>304新竹縣新豐鄉新興路1號</span>
        <b> 電話:03-5593142</b>
        <span>分機:3431、3432、3433</span>
        <b> 傳真:03-5593142</b>
        <span>分機:3440</span>
      </div>
      <div class="right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28957.57774046163!2d120.979456!3d24.8741888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1szh-TW!2stw!4v1734141289856!5m2!1szh-TW!2stw" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
  <main>
  <footer>
        <!--包圍文字說明的區塊-->
        <div class="explanation">
            <h3>&copy;Copyright 2025 Department of Information Management, MUST. All rights reserved. 楊裕鴻 Henry Yang</h3>
        </div>
    </div>
  </footer>
    </body>
</html>