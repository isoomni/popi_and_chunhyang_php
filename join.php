<?php
header("Content-Type: text/html; charset=UTF-8");
$conn = new mysqli("13.124.144.102","root","Ga1234!!","pac");
mysqli_query($conn,'SET NAMES utf8');

$userNickname = $_POST['user_nickname'];
$password = $_POST['user_pw'];

$sql = "insert into User('userNickname','password') values ('$userNickname','$password')";

$petsName =$_POST['pets_name'];
$petsAge =$_POST['pets_age'];
$petsSex =$_POST['pets_sex'];
$petsGoal =$_POST['pets_goal'];

$s = "insert into Pets('pets_name','pets_age','pets_sex', 'pets_goal') vaues ('$petsName','$petsAge','$petsSex','$petsGoal')";

$res=$conn->query($sql);
$res=$conn->query($sql);
echo "<script>location.href='http://13.124.144.102/home.html'</script>"
?>