<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usertoadmin";

$conn = new mysqli($servername, $username, $password, $dbname) or die(mysqli_error($conn));

if(isset($_GET['admin'])){
    $adminid = $_GET['admin'];

    $sql = ("DELETE FROM `admin` WHERE id='$adminid'");

    $result = $conn->query($sql);

    if($result == TRUE){
        echo ("<script>alert('DELETED SUCCESSFULLY')</script>");
      
        echo "<script>setTimeout(\"location.href = 'admin.php';\",100);</script>";
    }else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}