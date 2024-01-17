<?php
include "../partials/_dbconnect.php";
$username = $_POST['username'];
$password = $_POST['password']; //to simplfy the code I'm not using password hashing 
$cpassword = $_POST['cpassword'];

$exists = $conn->query("SELECT * FROM `user_info` WHERE `username` = '$username'"); 
if($password != $cpassword){
    echo "password and confirm password will be same";
    die;
}
else{
    if($exists->num_rows != 0){
        echo "username is already exists";
        die;
    }
    else {
        $sql = "INSERT INTO `user_info` ( `username`, `password`) VALUES ('$username', '$password')";
    }

}

if($conn->query($sql) === TRUE) {
    echo "Sign Up Successfully";
}
else {
    echo "Error : ". $conn->error;
}
$conn -> close();
?>