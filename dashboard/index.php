<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
        <?php
        echo "<p>Welcome ".$_SESSION['username'].","
        ?>
        <a href="logout.php">
            <button>Log Out</button>
        </a>
    </header>
    <div class="container">
        <form action="addnote.php" method="post">
            <input type ="text" name="shortnote" placeholder="write your short note"/>
            <input type="submit" value="Save" />
        </form>
    <?php
        include_once "../partials/_dbconnect.php";
        $saved_notes = $conn->query("SELECT * FROM `user_notes` WHERE `username` = '{$_SESSION['username']}'");

        if ($saved_notes->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Notes</th>
                        <th>Created On</th>
                    </tr>";
    
            while ($row = $saved_notes->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['notes']}</td>
                        <td>{$row['time']}</td>
                      </tr>";
            }
    
            echo "</table>";
        } else {
            echo "No notes found.";
        }
        $conn->close();
    ?>
    </div>
</body>
</html>
