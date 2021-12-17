<?php
$conn=mysqli_connect('13.124.144.102','soom','Soom1234!!','pac', 3306);
$hashedPassword = password_hash($_POST['user_pw'], PASSWORD_DEFAULT);
echo $hashedPassword;
$sql = "
    INSERT INTO User
    (userNickname, password)
    VALUES('{$_POST['user_nickname']}', '{$hashedPassword}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

// 회원가입 실패
if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
<!-- 회원가입 성공 -->
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "home.php";
    </script>
<?php
}
?>