<?php
session_start();
include '../partials/_dbconnect.php';
$username = $_POST['username'];
$password = $_POST['password']; 
/*password hashing isn't used just to focus ont the working ,
not the security and to make the project simple. 

*/
$result = $conn ->query("SELECT * FROM `user_info` WHERE username = '$username' AND password = '$password' ");
if($result->num_rows == 1){
    $_SESSION['username'] = $username;
    header("Location: ../dashboard/index.php");
    $conn->close;
    exit();
}
else {
    echo "You are an invalid user.";
    $conn->close();
    die;
}
?>