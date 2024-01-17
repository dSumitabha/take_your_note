<?php
include_once "../partials/_ifloggedin.php";
include_once "../partials/_dbconnect.php";

$shortnote = $_POST['shortnote'];
$saved = $conn->query("INSERT INTO `user_notes` (`username`, `notes`) VALUES ('{$_SESSION['username']}', '$shortnote')");
if($saved){
    $conn->close;
    header("Location: index.php");
    exit();
}
else {
    echo "You are failed to saved the note.";
    echo "<p>Your note was : $shortnote</p>";
    $conn->close;
    exit();
}
?>