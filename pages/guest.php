<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js"></script>
    <script src ="../assets/js/login.js"></script>
    <title>Main</title>
</head>
<body>
    <nav class="purple darken-2">
        <div class="container nav-wrapper">
        <a href="/" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <button type="button" class="btn modal-trigger purple darken-2" href="#modal1" id="signIn" onClick="login()">Sign In</button>
            <button type="button" class="btn purple darken-2 " id="SignUp" onClick="document.location='../pages/registration.php'">Sign Up</button
        </ul>
        </div>
    </nav>
            <div id="modal1" class="modal">
                <div class="modal-content">
                        <form action="../service/auth.php" method="POST" class="" style="">
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="modal-footer">
                            <button id="btn" type="submit" class="button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
    <?php
    require_once('../Table.php');
    ?>
</body>
</html>