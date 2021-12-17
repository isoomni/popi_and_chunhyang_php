
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popi and Chunhyang</title>

    <! -- ===== CSS ===== -- >
    <link rel="stylesheet" href="./css/diary_index.css"/>

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

    <!--===== Home =====-->

    <section class="index" id="index">
        <div class="index__container bd-grid">  
            <div class= "index_list" id="board_area"> 

            <br/><br/><br/><br/>
        <h1 class="index__title">My Diary</h1>
        <h4>작성한 일기 목록입니다.</h4>
         <table class="diaryList">
            <thead>
                <!--공간을 지정한다-->
                <tr>
                    <th width="150">날짜</th>
                    <th width="300">제목</th>
                    <th width="500">내용</th>
                </tr>
            </thead>

            
            
               
               <?php
               #질의를 할 DB를 연결한다.
               $conn=mysqli_connect('13.124.144.102','soom','Soom1234!!','pac', 3306);
              
               session_start();
                
                #자신의 일기만 볼 수 있도록 로그인한 정보와 userid가 일치하는 일기만 Select한다.
                $sql = "SELECT * FROM Diary WHERE userId ='{$_SESSION['userId']}' order by diaryDate desc";
                #결과를 저장한다.
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                $writer= $row['userId'];


                ?>

           <tbody>

           <?php

           #userid와 일치하는 일기들의 정보들을 가져온다.
           $sql2="SELECT diaryDate,diaryTitle,diaryText FROM Diary WHERE userId ='{$_SESSION['userId']}'";
                            #이 쿼리의 결과를 받는 변수 result2를 선언한다.
                            $result2 = mysqli_query($conn,$sql2);
                            #결과를 배열형태로 표에 가져온다
                            $Diaryindex = mysqli_fetch_array($result2);

                            #While을 이용해 빠지는 일기 없이 정보를 표에 가져온다.
                            While($row=mysqli_fetch_array($result2)){
                                echo 
                                '<tr><td>'. $row['diaryDate'].
                                '</td><td>'.$row[ 'diaryTitle' ].
                                '</td><td>'.$row[ 'diaryText' ].'</td><td>';
                            }
                            ?>

            </tbody>
            
        </table>
        <div id="write_btn">
            <!--글을 더쓰고 싶다면 이동한다-->
            <br/><br/>
            <a href="/diary.php"><button>글쓰기</button></a>
        </div>
    </div>
<br/><br/><br/>

     <!--===== FOOTER =====-->
     <footer class="footer section">
        <div class="footer__container bd-grid">

            <div class="footer__box">
                <h3 class="footer__title">IFIT</h3>
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

</body>