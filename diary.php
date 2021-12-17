<?php
session_start();
$conn=mysqli_connect('13.124.144.102','soom','Soom1234!!','pac', 3306);
#phpmyadmin의 DB와 연결한다.
?>

<!DOCTYPE html>
<html lang="en">
<head><!--사이트 디자인들을 정리하는 곳. 연결할 CSS역시 추가한다.-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popi and Chunhyang</title>

    <! -- ===== CSS ===== -- >
    <link rel="stylesheet" href="./css/diary.css"/>

    <! -- ===== BOXICONS ===== -- >
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <! -- ===== JQUERY ===== -- >
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>
<body>

    <!--===== HEADER =====--><!--사이트의 제목 및 위에 이동할 수 있는 섹션들의 링크를 지정한다-->
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

        <!--===== HOME =====-->
    <section class="diary" id="diary">
        <div class="diary__container bd-grid">
            <div class="diary__data">
                <!--입력받은 내용을 바탕으로 diary_write.php 작업으로 넘어간다-->
                <form method="post" action="/diary_write.php">
                    <div id="in_date">
                        <!--날짜를 입력받는다. 달력에서 날짜를 선택하는 형식으로 입력받는 창이 뜬다-->
                        <input type="date" name="diaryDate" id="diaryDate"  placeholder="날짜" required /> 
                        <br/><br/>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_title">
                        <!--제목을 text형식으로 입력받는다. -->
                        <textarea type="text" name="diaryTitle" id="diaryTitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                        <br/>
                    </div>

                    <div class="wi_line"></div>
                    <div id="in_content">
                        <!--일기의 내용은 길 수 있으니 textarea로 입력받고 타입은 text로 지정한다.-->
                        <textarea type="text" name="diaryText" id="diaryText" placeholder="일기를 입력하세요" required></textarea>
                        <br/><br/>
                    </div>

                    <div class="bt_se">
                        <!--버튼을 누르면 diary_write.php가 실행되어 서버로 넘어가고 성공여부를 알려준다-->
                        <button type="submit">일기 끝</button>
                    </div>
                
                </form>
            </div>
        </div>
    </section>

        <!--===== FOOTER =====--><!--사이트 아래 뜨는 요소들을 조합 및 정리한다-->
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
