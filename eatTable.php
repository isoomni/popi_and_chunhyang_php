<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<html>
	<head>
		<title>Popi and Chunhyang Eat</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- ===== CSS ===== -->
        <link rel="stylesheet" href="./css/table.css"/>

        <!-- ===== BOXICONS ===== -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <?php $conn=mysqli_connect('13.124.144.102','soom','Soom1234!!','pac', 3306); ?>
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
                                    <li class="nav__item"><a href="/logout.php" class="nav__link">Log out</a></li>
                            </ul>
                        </div>
            
                </nav>
        </header>
        <section class="base" id="base">
            <div class="base__container bd-grid">
                <div class="base__data">
                    <h1 class="base__title">식사량 체크</h1>
                    <div class="foodTable">
                        <?php
                        // 현재 로그인 중인 사용자의 반려동물 이름 선택
                        $sql = "SELECT * FROM Pets WHERE userId ='{$_SESSION['userId']}'";
                        $res = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($res);
                        $pet = $row['petsName'];
                        ?>
                        <h2><?php echo $pet?>의 식사량</h2>
                        <!-- 식사량 표 -->
                        <table class="baseList">
                            <thead>
                                <tr>
                                    <th>식사량(g)</th>
                                    <th>날짜</th>
                                    <th>시간</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // 현재 로그인 중인 유저의 반려동물의 식사량 선택
                                $sql2 = "SELECT foodDate, foodTime, foodAmount FROM Food WHERE userId ='{$_SESSION['userId']}'";
                                $result = mysqli_query($conn, $sql2);
                                while($row = mysqli_fetch_array($result)){
                                    echo '<tr><td>' . $row[ 'foodAmount' ] . '</td><td>'. $row[ 'foodDate' ] . '</td><td>' . $row[ 'foodTime' ] . '</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" onclick="location.href='/home.php'">메인으로 돌아가기</button>
                </div>
            </div>
        </section>
    </body>
</html>