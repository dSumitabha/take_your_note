<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Your Note Book </title>
</head>
<body>
    <div class="container">
        <h1> Your Note Book</h1>
        <a href="login/index.php"><button>Login</button></a>
        <a href="signup/index.php"><button>SignUp</button></a>
        <a href="dashboard/index.php"><button>Dashboard</button></a>
    <?php
    include_once "partials/_ifloggedin.php";
    ?>
    </div>
</body>
</html>