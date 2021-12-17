<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<html>
	<head>
		<title>Popi and Chunhyang Drink</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- ===== CSS ===== -->
        <link rel="stylesheet" href="./css/base.css"/>

        <!-- ===== BOXICONS ===== -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

	</head>
    
    <body>
		<!--===== HEADER =====-->
        <header class="header1">
            <nav class="nav bd-grid">
                    <div>
                        <a href="/home.php" class=nav__logo>포피와 춘향</a>
                        </div>
        
                        <div class="nav__menu" id="nav-menu">
                            <ul class="nav__list">
                                    <li class="nav__item"><a href="/home.php" class="nav__link active">Home</a></li>
                                    <li class="nav__item"><a href="/drink.php" class="nav__link">음수량</a></li>
                                    <li class="nav__item"><a href="/eat.php" class="nav__link">식사량</a></li>
                                    <li class="nav__item"><a href="/diary.php" class="nav__link">다이어리</a></li>
                                    <li class="nav__item"><a href="/login.php" class="nav__link">Log out</a></li>
                            </ul>
                        </div>
            
                   </nav>
        </header>
        <section class="base" id="base">
            <div class="base__container bd-grid">
                <div class="base__data">
                    <!-- 음수량 입력 -->
                    <h1 class="base__title">음수량 체크</h1>
                    <form method="POST" action="/drinkProcess.php" id="drink-form">
                        <h2>음수량</h2>
                        <div class="waterDate">
                            <label for="waterDate">물 마신 날</label>
                            <input type="date" name="waterDate" id="waterDate" autocomplete="off" required>
                        </div>
                        <div class="waterTime">
                            <label for="waterTime">물 마신 시간</label>
                            <input type="time" name="waterTime" id="waterTime" autocomplete="off" required>
                        </div>
                        <div class="waterAmount">
                            <label for="waterAmount">음수량(ml)</label>
                            <input type="text" name="waterAmount" id="waterAmount" autocomplete="off" required>
                        </div>
                        <div class="btn">
                            <button type="submit" id="drink-button">음수량 입력</button>
                        </div>
                    </form>
                    <div>
                        <button type="button" onclick="location.href='/drinkTable.php'">음수량 확인하기</button>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
