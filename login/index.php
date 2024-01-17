<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <?php
        include_once "../partials/_ifloggedin.php";
        ?>
        <h1>Log In</h1>
        <form action="login.php" method="post">
            <input type="text" placeholder="Enter Username" name="username" >
            <input type="password" placeholder="Enter Password" name="password">
            <input type="submit" value="Log In">
        </form>
    </div>
</body>
</html>