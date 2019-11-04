<?php
$con=mysqli_connect("localhost","root","0000","gases");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
?>