<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js"></script>
    <script src ="../assets/js/login.js"></script>
    <script src="../assets/js/confirmPassword.js"></script>
    <title>Registration</title>
</head>
<body>
<nav class="purple darken-2">
    <div class="container nav-wrapper">
        <a href="../main.php" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <button type="button" class="btn modal-trigger purple darken-2" href="#modal1" id="signIn" onClick="login()">Sign In</button>
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


    <div class="container row" style=" margin-top: 80px;" >
        <form action="../service/addUser.php" method="POST" style="border: 2px black ; padding: 30px;">
            <div class="form-group">
                <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                <span class="helper-text" data-error="Что-то неправильно!" data-success="right"></span>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                <span class="helper-text" data-error="Что-то неправильно!" data-success="right"></span>
            </div>


            <div class="form-group">
                <select class="browser-default" name="role">
                    <option value="2" disabled selected>Role</option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
            </div>

            <div class="form-group">
                <input id="password" type="password" class="validate" name="password" placeholder="Password" required>
                <span class="helper-text" data-error="Минимальное количество символов 6" data-success="Correct"></span>
            </div>


            <div class="form-group">
                <input id="password" type="password" class="validate" name="confirm_password" placeholder="Confirm Password" required>
                <span class="helper-text" data-error="Минимальное количество символов 6" data-success="Correct"></span>
            </div>

            <button id="btn" type="submit" class="btn purple darken-2 col s4 offset-s4">Registration</button>
        </form>
    </div>



</body>
</html>