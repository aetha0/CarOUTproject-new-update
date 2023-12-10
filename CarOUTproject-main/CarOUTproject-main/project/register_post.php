<?php
include('inc/connection.php');
if(isset($_POST['$submit'])){


    $username= stripcslashes(strtolower($_POST['username']));
    $email=stripcslashes($_POST['email']);
    $password= stripcslashes($_POST['password']);
}



$username =htmlentities(mysqli_real_escape_string ($conn,$_POST['username']));
$email =htmlentities(mysqli_real_escape_string ($conn,$_POST['email']));
$password =htmlentities(mysqli_real_escape_string ($conn,$_POST['password']));

$md5_pass=md5($password);


$check_user= "SELECT=FROM 'user' WHERE username='$username' ";
$check_result=mysqli_query($conn,$check_user);
$num_rows=mysqli_num_rows($check_result);
if($num_rows !=0){
    $user_error='<p id="error" > sorry username already exist , change another one <p><br>';
    $error_s=1;
}


if(empty($username)){
    $user_error='please enter username <br>';
    error_s=1;
}elseif(strlen($username)<6){
    $user_error='your username needs to have a minimum of 6 letter <br> ';
} elseif(filter_var($username,FILTER_VALIDATE_INT)){

    $user_error='please enter a vaildate username  ';
}

if (empty($email)){
    $email_error= 'please insert email ';
    $erroe_s=1;

}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $email_error= 'please a vaild email ';
    $erroe_s=1;

}

if (empty($password)){
    $pass_error= 'please a vaild password ';
    $erroe_s=1;
    include('register.php');
}elseif (strlen($password)<6){
    $user_error='your password needs to have a minimum of 6 letter  ';
    include('register.php');
}

else{
    if(($err_s==0)&&($num_rows==0)){
        $sql="INSERT INTO user(username,fullname,email,password,md5_pass,phonenum)
        VALUES('$username',$email,$password,$md5_pass)";
        mysql_query($con, $sql);
        header('location':index.php');
    }else{

        include('register.php');
    }

}
?>