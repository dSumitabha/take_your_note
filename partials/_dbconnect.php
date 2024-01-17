<?php
$server = "localhost";
$uname = "root";
$passkey = "";
$db_name = "notebook_db";

$conn = new mysqli($server, $uname, $passkey, $db_name);
if ($conn -> connect_error){
    die("connection failed".$conn -> connect_error);
}
?>