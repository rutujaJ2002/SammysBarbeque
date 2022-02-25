<?php 
$server = "localhost";
$username = "root";
$password = "rajashri";
$dbname = "barbeque";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(mysqli_connect_error($conn)){
    echo "Something Went Wrong";
}

?>