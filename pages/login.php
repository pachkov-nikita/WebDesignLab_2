

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Login</title>
</head>
<body>
<nav class="purple darken-2">
    <div class="container nav-wrapper">
        <a href="../main.php" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <button type="button" class="btn purple darken-2 " id="SignUp" onClick="document.location='../pages/registration.php'">Sign Up</button
        </ul>
    </div>
</nav>

<div
<div class="container row" style=" margin-top: 80px;" >
        <form action="../service/login.php" method="POST" style="border: 2px black ; padding: 30px;">
            <div class="form-group">
                <input type="text" class="form-control" name="login" placeholder="Login" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="modal-footer">
                <button id="btn" type="btn-large" class="btn purple darken-2 col s4 offset-s4" style='margin-left: 350px'> Login </button>
            </div>
        </form>
    </div>
</div>


</form>
</div>
</body>
</html>