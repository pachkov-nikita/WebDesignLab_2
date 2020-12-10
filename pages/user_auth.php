<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js"></script>

    <title>Home page</title>
</head>
<body>

    <nav class="purple darken-2">
        <div class="container nav-wrapper">
        <a href="/" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="./editForUser.php">
            <?php
                session_start();
                echo $_SESSION['first_name'];
            ?>
            </a></li>
            <li><a href="../service/LogOut.php">Sign Out</a></li>
        </ul>
        </div>
    </nav>

    <?php
    require_once('../Table.php');
    ?>
</body>
</html>