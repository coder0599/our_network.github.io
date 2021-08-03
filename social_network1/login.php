<?php
session_start();
include("includes/connection.php");
if (isset($_POST['login'])) {

    $mobile = htmlentities(mysqli_real_escape_string($con,$_POST['mobile']));
    $pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));


    $select_user = " select * from users where user_mobile ='$mobile' AND user_pass ='$pass' And status ='verified'";
    $query = mysqli_query($con,$select_user);
    $check_user = mysqli_num_rows($query);

    if ($check_user == 1) 
    {
        $_SESSION['user_mobile'] = $mobile;
        echo"<script> window.open('home.php','_self') </script>";

    }else{
        echo"<script> alert('your mobile number or  password is incorrect. Please enter your valid data !!')</script>";

    }
}


?>