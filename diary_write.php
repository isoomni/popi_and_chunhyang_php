<!--diary.php에서 완료버튼을 누르면 작동하는 페이지로 phpmyadmin의 DB에 저장하는 작업을 담당하는 php다-->
<?php
#데이터 저장을 위해 sql을 연결한다
$conn=mysqli_connect('13.124.144.102','soom','Soom1234!!','pac', 3306);

session_start();

// write.php에서 게시글 제목, 게시글 내용 등을 입력받아 옴
//입력받은 내용은 $__POST로 변수를 선언해야한다.
$diaryDate = $_POST['diaryDate'];
$diaryTitle = $_POST['diaryTitle'];
$diaryText = $_POST['diaryText'];

//userId는 이미 입력되어있는 상황이니까 $__Session으로 선언한다.
$userId = $_SESSION['userId'];

//연결한 DB에 레코드를 삽입하는 연산을 진행한다. 
$sql = "INSERT INTO Diary(userId,diaryTitle,diaryText,diaryDate) VALUE('{$userId}','{$diaryTitle}','{$diaryText}','{$diaryDate}')";
echo $sql;
//Insert된 결과를 $result로 선언한다.
$result = mysqli_query($conn, $sql);

//$result가 제대로 저장되지 않아 False가 뜬다면 아래의 echo 이후의 문장이 출력된다.
if ($result === false) {
    echo "게시글 등록 실패. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
<!--저장이 완료되면 아래의 글이 출력되고 diary_Done.php로 넘어간다-->
    <script>
        alert("게시글 등록 완료");
        location.href = "diary_Done.php";
    </script>
<?php
}
?>


