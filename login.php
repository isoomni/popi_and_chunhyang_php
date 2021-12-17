<!DOCTYPE html>
<html lang="ko">
<html>
	<head>
		<title>Popi and Chunhyang Login</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- ===== CSS ===== -->
        <link rel="stylesheet" href="./css/login.css"/>

        <!-- ===== BOXICONS ===== -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== JQUERY ===== -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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
                                    <li class="nav__item"><a href="/login.php" class="nav__link">Log In</a></li>
                            </ul>
                        </div>
            
                        <div>
                            <i class='bx bx-cart nav__cart' ></i>
                            <i class='bx bx-menu nav__toggle' id="nav-toggle"></i>
                        </div>

                </nav>
        </header>

    
    <body>
        <section class="login" id="login">
            <div class="login__container bd-grid">
                <div class="login__data">
                    <!-- 로그인 폼 -->
                    <h1 class="login__title">로그인</h1>
                    <form method="post" action="/loginProcess.php">
                        <h2>🧑‍🤝‍🧑반려인 정보</h2>
                        <div class="userNickname">
                            <label for="userNickname">아이디</label>
                            <input type="text" name="userNickname" id="userNickname" placeholder="userNickname" autocomplete="off" required>
                        </div>
                        <div class="password">
                            <label for="password">비밀번호</label>
                            <input type="password" name="password" id="password" placeholder="password" autocomplete="off" required>
                        </div>
                        <div class="btn">
                            <button type="submit">로그인</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
