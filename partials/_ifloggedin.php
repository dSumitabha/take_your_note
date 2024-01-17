<?php
    session_start(); 

    if (isset($_SESSION['username'])) {
        
        echo "You are already loggedin.";
        echo "<a href='../dashboard/index.php'><button>Go To Dashboard</button></a>";
    }
?>