<?php
//세션을 종료한다.
    session_start();
    session_destroy();
?>
<!--세션 종료(로그아웃) 시 logout success 메세지를 띄우고 메인 화면으로 돌아간다.-->
    <script>
        alert("logout success")
        location.href = "home.php";
    </script>
