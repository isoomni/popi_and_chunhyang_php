<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<html>
	<head>
		<title>Popi and Chunhyang PetInfo</title>
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
                                    <li class="nav__item"><a href="/join.php" class="nav__link">Sign Up</a></li>
                                    <li class="nav__item"><a href="/logout.php" class="nav__link">Log OUT</a></li>
                            </ul>
                        </div>
            
                </nav>
        </header>
        <section class="base" id="base">
            <div class="base__container bd-grid">
                <div class="base__data">
                    <!-- 반려동물 정보 입력 폼 -->
                    <h1 class="base__title">반려동물 정보 입력</h1>
                    <form method="POST" action="/petInfoProcess.php" id="petinfo-form">
                        <h2>🐶반려동물 정보</h2>
                        <div class="petsName">
                            <label for="petsName">반려동물 이름</label>
                            <input type="text" name="petsName" id="petsName" autocomplete="off" required>
                        </div>
                        <div class="petsAge">
                            <label for="petsAgee">반려동물 나이</label>
                            <input type="text" name="petsAge" id="petsAge" autocomplete="off" required>
                        </div>
                        <div class="petsSex">
                            <label for="petsSex">반려동물 성별</label>
                            <input type='radio' name='petsSex' id="petsSex" value='F' checked/>Female
                            <input type='radio' name='petsSex' id="petsSex" value='M'/>Male
                        </div>
                        <div class="petsGoal">
                            <label for="petsGoal">반려동물 목표 음수량(단위: ml)</label>
                            <input type="text" name="petsGoal" id="petsGoal" autocomplete="off" required>
                        </div>
                        <div class="btn">
                            <button type="submit" id="petinfo-button">정보입력</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
