<!DOCTYPE html>
<html lang="en">
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
            <button type="button" class="btn purple darken-2" id="signIn" onClick="document.location='../pages/login.php'">Sign In</button>
            <button type="button" class="btn purple darken-2 " id="SignUp" onClick="document.location='../pages/registration.php'">Sign Up</button>
        </ul>
        </div>
    </nav>

    <?php
    require_once('../Table.php');
    ?>
</body>
</html>