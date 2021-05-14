<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usertoadmin";

$conn = new mysqli($servername, $username, $password, $dbname)or die(mysqli_error($conn));




if(isset($_GET['user'])){
    $userid = $_GET['user'];

    

    
    $sql=("INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`, `Account_Created_Date`) SELECT NULL, `firstname`, `lastname`, `email`, `password`, `Account_Created_Date` FROM `users` WHERE id='" .$_GET["user"]. "'");
    // $update =("UPDATE users SET status='admin' WHERE id='" .$_GET["user"]. "'");
    $mysqli =("DELETE FROM `users` WHERE id='$userid'");
    
    

    
    $result2 = $conn->query($sql);
    $result1 = $conn->query($mysqli);
   
    
        if($result1 && $result2  == TRUE){
            echo ("<script>alert('User added as Admin successfully.')</script>");
            echo "<script>setTimeout(\"location.href = 'admin.php';\",100);</script>";
        }else{
            echo "Error" . $sql . "<br>" . $conn->error;
        }
        
}
