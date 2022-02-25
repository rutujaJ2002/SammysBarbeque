<?php

include "./conn.php";

if(isset($_POST['add'])){
    $fname = $_POST['fname'];
    $fcat = $_POST['fcat'];
    $fdesc = $_POST['fdescription'];
    $fprice = $_POST['fprice'];

    if($fcat == 'Breakfast'){
        $query1 = " INSERT INTO `breakfast`(`bname`, `description`, `price`) VALUES ('$fname','$fdesc','$fprice') ";
        $result = mysqli_query($conn,$query1);
    }

    if($fcat == 'Lunch'){
        $query2 = " INSERT INTO `lunch`(`lname`, `description`, `price`) VALUES ('$fname','$fdesc','$fprice') ";
        $result = mysqli_query($conn,$query2);
    }

    if($fcat == 'Dinner'){
        $query3 = " INSERT INTO `dinner`(`dname`, `description`, `price`) VALUES ('$fname','$fdesc','$fprice') ";
        $result = mysqli_query($conn,$query3);
    }

    if($fcat == 'Dessert'){
        $query4 = " INSERT INTO `desserts`(`dename`, `description`, `price`) VALUES ('$fname','$fdesc','$fprice') ";
        $result = mysqli_query($conn,$query4);
    }


    if($result){
        $msg = "Food item added into $fcat!!";
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('$msg');
            window.location.href='../items.php';
            </script>");
    }
    else{
        $err_msg = "Failed to add into $fcat!!";
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('$err_msg');
            window.location.href='../items.php';
            </script>");
    }
   
}
?>