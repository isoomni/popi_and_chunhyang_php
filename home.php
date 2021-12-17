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
    <link rel="stylesheet" href="./css/homereal.css"/>

    <! -- ===== BOXICONS ===== -- >
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>

    <!--===== HEADER =====-->
    <header class="header1">
        <nav class="nav bd-grid">
            <div>
                <a href="/home.php" class=nav__logo">포피와 춘향</a>
            </div>
<!--유저아이디가 세션에 저장되어 있지 않을 때(로그인되어 있지 않을 때) header-->
<?php
    if(!isset($_SESSION['userId'])){
?>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/home.php" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="/login.php" class="nav__link">음수량</a></li>
                    <li class="nav__item"><a href="/login.php" class="nav__link">식사량</a></li>
                    <li class="nav__item"><a href="/login.php" class="nav__link">다이어리</a></li>
                    <li class="nav__item"><a href="/join.php" class="nav__link">Sign Up</a></li>
                    <li class="nav__item"><a href="/login.php" class="nav__link">Log In</a></li>
                </ul>
            </div>
                
        </nav>
    </header>

    <main class="main1">
        <!--===== HOME =====-->
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">POPI AND CHUNHYANG</h1>
                    <a href="./login.php" class="button">GO LOGIN</a>
                    <a href="./join.php" class="button">GO SIGNUP</a>
                </div>
            </div>

            <img src="./img/foot_main.png" alt="" class="home__img">

        </section>

<?php
    }else{//세션값이 존재 = 로그인된 상태

?>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/home.php" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="/drink.php" class="nav__link">음수량</a></li>
                    <li class="nav__item"><a href="/eat.php" class="nav__link">식사량</a></li>
                    <li class="nav__item"><a href="/diaryindex.php" class="nav__link">다이어리</a></li>
<!--로그인 된 상태에는 상단 바에 로그아웃 버튼만 띄운다.-->
                    <li class="nav__item"><a href="/logout.php" class="nav__link">Log out</a></li>
                </ul>
            </div>
                
        </nav>
    </header>

    <main class="main1">
        <!--===== HOME =====-->
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">POPI AND CHUNHYANG</h1>
                    <a href="drink.php.php" class="button">GO RECORDING</a>
                </div>
            </div>

            <img src="./img/foot_main.png" alt="" class="home__img">

        </section>


<?php
    }
?>

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
                    <li><a href="/home.php" class="footer__link">Home</a></li>
                    <li><a href="/join.php" class="footer__link">Sign Up</a></li>
                    <li><a href="/login.php" class="footer__link">Log In</a></li>
                    <li><a href="/diaryindex.php" class="footer__link">My</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">OUR SERVICES</h3>
                <ul>
                    <li><a href="/diaryindex.php" class="footer__link">My</a></li>
                    <li><a href="/drink.php" class="footer__link">음수량</a></li>
                    <li><a href="/eat.php" class="footer__link">식사량</a></li>
                    <li><a href="/diary.php" class="footer__link">다이어리</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">FOLLOW</h3>
                <ul>
                    <li><a href="http://www.facebook.com" class="footer__social"><i class='bx bxl-facebook-square'></i></a></li>
                    <li><a href="https://www.instagram.com/isoomni_" class="footer__social"><i class='bx bxl-instagram' ></i></a></li>
                    <li><a href="https://twitter.com" class="footer__social"><i class='bx bxl-twitter' ></i></a></li>
                </ul>
            </div>
        </div>
        <p class="footer__copy">&#169; 2021 copyright by isoomni</p>
    </footer>



</body>
</html>
