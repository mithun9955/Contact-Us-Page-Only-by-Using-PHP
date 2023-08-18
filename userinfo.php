<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'service');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$query = " insert into userinfodata (user, email, mobile, message)
values ('$user', '$email', '$mobile', '$message')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php')


?>