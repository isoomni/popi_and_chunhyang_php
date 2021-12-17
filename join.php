<!DOCTYPE html>
<html lang="ko">
<html>
	<head>
		<title>Popi and Chunhyang Join</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- ===== CSS ===== -->
        <link rel="stylesheet" href="./css/base.css"/>

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
                                    <li class="nav__item"><a href="/home.html" class="nav__link active">Home</a></li>
                                    <li class="nav__item"><a href="/drink.html" class="nav__link">음수량</a></li>
                                    <li class="nav__item"><a href="/eat.html" class="nav__link">식사량</a></li>
                                    <li class="nav__item"><a href="/diary.html" class="nav__link">다이어리</a></li>
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
        <section class="base" id="base">
            <div class="base__container bd-grid">
                <div class="base__data">
                    <!-- 회원가입 폼 -->
                    <h1 class="base__title">회원가입</h1>
                    <form method="POST" action="/joinProcess.php" id="signup-form">
                        <h2>🧑‍🤝‍🧑반려인 정보</h2>
                        <div class="user_nickname">
                            <label for="user_nickname">아이디</label>
                            <input type="text" name="user_nickname" id="user_nickname" autocomplete="off" required>
                        </div>
                        <div class="user_pw">
                            <label for="user_pw">비밀번호</label>
                            <input type="password" name="user_pw" id="user_pw" autocomplete="off" required>
                        </div>
                        <div class="pw_Check">
                            <label for="passwordCheck" class="form-label">비밀번호 체크</label>
                            <input type="password" class="form-control" id="password-check" placeholder="비밀번호를 입력해 주세요.">
                        </div>
                        <div class="btn">
                            <button type="button" id="signup-button">회원가입</button>
                        </div>
                    </form>
                    <!-- 비밀번호가 일치하지 않을 시 에러 메시지 출력 -->
                    <script>
                        const signupForm = document.querySelector("#signup-form");
                        const signupButton = document.querySelector("#signup-button");
                        const password = document.querySelector("#user_pw");
                        const passwordCheck = document.querySelector("#password-check");
                        signupButton.addEventListener("click", function(e) {
                            if(password.value&& password.value === passwordCheck.value){
                                
                            signupForm.submit();
                            }else{
                                alert("비밀번호가 서로 일치하지 않습니다");
                            }
                        });
                    </script>
                </div>
            </div>
        </section>
    </body>
</html>
