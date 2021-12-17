<!--diary_write.php 작업이 성공하였다면 넘어오는 페이지다.-->
<?php
session_start();
$conn=mysqli_connect('13.124.144.102','soom','Soom1234!!','pac', 3306);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popi and Chunhyang</title>
    <! -- ===== CSS ===== -- >
    <link rel="stylesheet" href="./css/diary.css"/>

    <! -- ===== BOXICONS ===== -- >
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>

<!--===== HEADER =====-->
<header class="header1">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class=nav__logo">포피와 춘향</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/home.php" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="/drink.php" class="nav__link">음수량</a></li>
                    <li class="nav__item"><a href="/eat.php" class="nav__link">식사량</a></li>
                    <li class="nav__item"><a href="/diary.php" class="nav__link">다이어리</a></li>
                    <li class="nav__item"><a href="/logout.php" class="nav__link">Log out</a></li>
                </ul>
            </div>

         </nav>
    </header>

  <section class="diary_Done" id="diaryDone">
           <div class="diary__container bd-grid">
            <div class="diary__Done">
                  
                <br/> <br/> <br/> <br/>
                    <div class= "DoneIndex">
                        <!--'쓴 일기 보러가기'를 누르면 일기 목록을 볼 수 있는  diaryindex.php로 넘어간다-->
                    <a href="diaryindex.php"><h2> 쓴 일기 보러가기</a></h2>
                    <br/><br/><br/>
                    <!--홈으로 돌아간다-->
                    <a href="home.php"> <h2>홈으로 돌아가기</a></h2>
                    </div>
               
    </section>


<!--===== FOOTER =====-->
<footer class="footer section">
        <div class="footer__container bd-grid">

            <div class="footer__box">
                <h3 class="footer__title">POPI&CHUNHYANG</h3>
                <p class="footer__deal">Products store</p>
                <a href="#"><img src="./img/footerstore1.png" alt="" class="footer__store"></a>
                <a href="#"><img src="./img/footerstore2.png" alt="" class="footer__store"></a>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">EXPLORE</h3>
                <ul>
                    <li><a href="#" class="footer__link">Home</a></li>
                    <li><a href="#" class="footer__link">Sign Up</a></li>
                    <li><a href="#" class="footer__link">Log In</a></li>
                    <li><a href="#" class="footer__link">My</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">OUR SERVICES</h3>
                <ul>
                    <li><a href="#" class="footer__link">My</a></li>
                    <li><a href="#" class="footer__link">음수량</a></li>
                    <li><a href="#" class="footer__link">식사량</a></li>
                    <li><a href="#" class="footer__link">다이어리</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">FOLLOW</h3>
                <ul>
                    <li><a href="#" class="footer__social"><i class='bx bxl-facebook-square'></i></a></li>
                    <li><a href="#" class="footer__social"><i class='bx bxl-instagram' ></i></a></li>
                    <li><a href="#" class="footer__social"><i class='bx bxl-twitter' ></i></a></li>
                </ul>
            </div>
        </div>
        <p class="footer__copy">&#169; 2021 copyright by isoomni</p>
    </footer>

</body>
