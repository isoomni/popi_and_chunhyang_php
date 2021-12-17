<?php
session_start();

$conn=mysqli_connect('13.124.144.102','soom','Soom1234!!','pac', 3306);

// 로그인한 유저의 Pets 테이블 정보 가져오기와서 해당 반려동물 Id 받기
$sql = "SELECT * FROM Pets WHERE userId ='{$_SESSION['userId']}'";
$res = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($res);
$pet = $row['petsId'];

// 반려동물 정보 테이블 삽입
$sql = "
    INSERT INTO Food
    (userId, petsId, foodDate, foodTime, foodAmount)
    VALUES('{$_SESSION['userId']}','{$pet}', '{$_POST['foodDate']}', '{$_POST['foodTime']}', '{$_POST['foodAmount']}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

// 저장 오류
if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
<!-- 입력성공 -->
    <script>
        alert("식사량이 입력되었습니다.");
        location.href = "eatTable.php";
    </script>
<?php
}
?>