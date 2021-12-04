<?php
header("Content-Type:text/html; charset=UTF-8");
session_start();

$conn = new mysqli("13.124.144.102","root","Ga1234!!","pac");

mysqli_query($conn,'utf8');

$uid = $_POST['user_nickname'];
$pw = $_POST['user_pw'];

$sql = "select * from User where userNickname = '$uid' and password = '$pw'";

$res = $conn->query($sql);
$row = mysqli_fetch_array($res);

if($res -> num_rows >0){
    $_SESSION['user_nickname'] = $uid;

    if(isset($_SESSION['user_nickname'])){
        echo "<script>location.href='http://13.124.144.102/home.html'</script>";
    } else{
        echo "<script> alert('로그인 실패!');</script>";
    }} else{
        echo "<script> alert('로그인 실패!');</script>";
    }
}

?>