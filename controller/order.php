<?php
include '../controller/conn.php';

try{
    if(isset($_POST['order'])){
        $name = $_POST['name'];
        $food = $_POST['food'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $quantity = $_POST['quantity'];
    
        $q = " INSERT INTO `orders`(`name`, `food`, `address`, `phone`, `quantity`) VALUES ('$name','$food','$address','$phone','$quantity') ";
        $query = mysqli_query($conn, $q);
        if($query){
            $msg = "Order Plcaed Successfully!";
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('$msg');
                    window.location.href='../index.php';
                    </script>");
        }
    }
}
catch(Exception $e){
    $error_msg= $e->getMessage();
}
?>