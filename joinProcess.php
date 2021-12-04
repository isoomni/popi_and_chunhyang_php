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

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
<?php
$conn=mysqli_connect('13.124.144.102','soom','Soom1234!!','pac', 3306);

$sql3 = "
SELECT userId FROM User WHERE userNickname = '{$_POST['user_nickname']}'
";
$sql2 = "
    INSERT INTO Pets
    (petsName,petsAge,petsSex, petsGoal, userId)
    VALUES('{$_POST['pets_name']}','{$_POST['pets_age']}','{$_POST['pets_sex']}','{$_POST['pets_goal']}, '{$sql3}'
    )";
echo $sql2;
$result = mysqli_query($conn,$sql2);

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

<!-- if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    $petsName =$_POST['pets_name'];
    $petsAge =$_POST['pets_age'];
    $petsSex =$_POST['pets_sex'];
    $petsGoal =$_POST['pets_goal'];
    $sql2 = "
    INSERT INTO Pets
    (petsName,petsAge,petsSex, petsGoal)
    VALUES('{$petsName}','{$petsAge}','{$petsSex}','{$petsGoal}'
    )";
    echo $sql2;

    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "home.html";
    </script>
}
?> -->