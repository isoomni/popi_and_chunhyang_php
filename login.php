<?php
header("Content-Type:text/html; charset=UTF-8");
session_start();

$conn = new mysqli("13.124.144.102","root","Ga1234!!","pac");

mysqli_query($conn,'SET NAMES utf8');

$uid = $_POST['user_nickname'];
$pw = $_POST['user_pw'];

$sql = "select * from User where userNickname = '$uid' and password = '$pw'";

$res = $conn->query($sql);
$row = mysqli_fetch_array($res);

if($res -> num_rows >0){
    $_SESSION['userNickname'] = $uid;
    $_SESSION['password'] = $pw;
    
    if(isset($_SESSION['userNickname'])&&isset($_SESSION['password'])){
        echo "<script>location.href='http://13.124.144.102/home.html'</script>";
    } else{
        echo "<script> alert('로그인 실패!1');</script>";
    }
} else{
    echo "<script> alert('로그인 실패!2');</script>";
}

?>