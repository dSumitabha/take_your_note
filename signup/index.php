<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up Page</title>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="signup.php" method="post">
            <input type="text" placeholder="Enter Username" name="username" >
            <input type="password" placeholder="Enter Password" name="password">
            <input type="password" placeholder="Re-enter Password" name="cpassword">
            <input type="submit" value="Sign Up">
        </form>
        <?php
        include_once "../partials/_ifloggedin.php";
        ?>
    </div>
    <div class="container">
        <h1> List of Users with password </h1>
        <?php
        include "../partials/_dbconnect.php";

        $result = $conn->query("SELECT `id` , `username`, `password` FROM `user_info`");

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Username</th>";
            echo "<th>Password</th>";
            echo "</tr>";
            
        
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>
</body>
</html>