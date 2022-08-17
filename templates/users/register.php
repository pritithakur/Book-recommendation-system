<?php
echo "hi";
session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'regist');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from users where name='$name' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo" username already exist";   
}else{
    $reg = "insert into users(name, password, email) values ('$name','$pass','$email')";
    mysqli_query($con , $reg);
    echo "Registration successful";
}

?>
<?php


