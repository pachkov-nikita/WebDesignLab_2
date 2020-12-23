<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.css">
        <link rel="stylesheet" href="../assets/css/styles.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js"></script>
        <title>Main</title>
    </head>
<body>

<nav class="purple darken-2">
        <div class="container nav-wrapper">
        <a href="../main.php" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="./edit.php">
                    <?php
                    session_start();
                    echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' >";
                    echo $_SESSION['first_name'];
                    echo "</button>";
                    ?>
            </a></li>
            <button type="button" class="btn purple darken-2 " id="SignUp" onClick="document.location='../service/exit.php'">Log Out</button
        </ul>
        </div>
    </nav>

    <?php
    require_once('../Table.php');
    ?>
        <div class="row" style="margin-top: 50px;">
            <a href="addnewuser.php" class="btn purple darken-2 col s4 offset-s4">Add User</a>
        </div>

</body>
</html>