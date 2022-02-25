<?php

include "./controller/conn.php";

//for desserts deletion
$dename= $_GET['dename'];
$q4 = " DELETE FROM `desserts` WHERE dename= '$dename' ";
mysqli_query($conn,$q4);
header('location:allitems.php');

//for dinner item deletion
$dname= $_GET['dname'];
$q3 = " DELETE FROM `dinner` WHERE dname= '$dname' ";
mysqli_query($conn,$q3);
header('location:allitems.php');

//for lunch item deletion
$lname= $_GET['lname'];
$q2 = " DELETE FROM `lunch` WHERE lname= '$lname' ";
mysqli_query($conn,$q2);
header('location:allitems.php');

//for breakfast item deletion
$bname= $_GET['bname'];
$q1 = " DELETE FROM `breakfast` WHERE bname= '$bname' ";
mysqli_query($conn,$q1);
header('location:allitems.php');
?>