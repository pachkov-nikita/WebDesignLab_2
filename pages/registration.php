

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Registration</title>
</head>
<body>
<nav class="purple darken-2">
    <div class="container nav-wrapper">
        <a href="../main.php" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <button type="button" class="btn purple darken-2" id="signIn" onClick="document.location='../pages/login.php'">Sign In</button>
        </ul>
    </div>
</nav>

<div class="container row" style=" margin-top: 80px;" >
    <form action="../service/registration.php" method="POST" style="border: 2px black ; padding: 30px;">

        <div class="form-group">
            <input type="text" class="validate" name="login" placeholder="login" required>
            <span class="helper-text" data-error="Что-то неправильно!" data-success="right"></span>
        </div>
        <div class="form-group">
        <input type="text" class="validate" name="first_name" placeholder="First Name" required>
        <span class="helper-text" data-error="Что-то неправильно!" data-success="right"></span>

</div>


        <div class="form-group">
    <input type="text" class="validate" name="last_name" placeholder="Last Name" required>
    <span class="helper-text" data-error="Что-то неправильно!" data-success="right"></span>
</div>
<div class="form-group">
    <select class="browser-default" name="role">
        <option value="2" disabled selected>Role</option>
        <option value="1">Admin</option>
        <option value="2">User</option>
    </select>
</div>
        <div class="row">
            <div class="form-group">
                <input id="password" type="password" class="validate" minlength="6" name="password" required placeholder="Password">
                <label for="password" ></label>
                <span class="helper-text" data-error="Не менее 6 символов!" ></span>
            </div>
        </div>
        <div class="form-group">
                <input id="confirm_password" type="password" class="validate" minlength="6" required placeholder="Confirm Password">
                <label for="confirm_password" ></label>
                <span class="helper-text" data-error="Не менее 6 символов!" ></span>
            </div>
        </div>
    <button id="btn" type="submit" class="btn purple darken-2 col s4 offset-s4 disabled" style='margin-left: 700px'>Registration</button>

    </form>
</div>
<script src="../assets/js/confirmPassword.js"></script>
</body>
</html>