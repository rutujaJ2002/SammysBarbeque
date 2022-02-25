<?php

include "./conn.php";

session_start();

if(isset($_POST['login'])){
    $query = "SELECT * FROM `login` WHERE `username` ='$_POST[username]' AND `password` ='$_POST[password]' ";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){
        $attd_msg = "Logged In Successfully!!";
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('$attd_msg');
            window.location.href='../items.php';
            </script>");
    }
    else{
        $attd_msg = "Login Failed! Try again!!";
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('$attd_msg');
            window.location.href='../login.php';
            </script>");
    }
}
?>

