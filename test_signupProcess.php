<?php
$conn=mysqli_connect('13.124.144.102','soom','Soom1234!!','pac', 3306);
$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
echo $hashedPassword;
$sql = "
    INSERT INTO User
    (userNickname, password)
    VALUES('{$_POST['userNickname']}', '{$hashedPassword}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "home.html";
    </script>
<?php
}
?>