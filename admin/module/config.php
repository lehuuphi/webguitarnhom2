<?php 
    $host = 'localhost';
    $user = 'root';
    $password = 'lehuuphi';
    $csdl = 'webguitar';
    $conn=mysqli_connect($host, $user, $password, $csdl);
    mysqli_select_db($conn,$csdl);
?>
