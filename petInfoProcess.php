<?php
session_start();

$conn=mysqli_connect('13.124.144.102','soom','Soom1234!!','pac', 3306);
// 로그인한 사용자의 반려동물 정보 삽입
$sql = "
    INSERT INTO Pets
    (userId,petsName, petsAge, petsSex, petsGoal)
    VALUES('{$_SESSION['userId']}','{$_POST['petsName']}', '{$_POST['petsAge']}', '{$_POST['petsSex']}', '{$_POST['petsGoal']}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

// 반려동물 정보 입력 에러
if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
<!-- 정보 입력 성공 -->
    <script>
        alert("반려동물 정보입력이 완료되었습니다");
        location.href = "home.php";
    </script>
<?php
}
?>