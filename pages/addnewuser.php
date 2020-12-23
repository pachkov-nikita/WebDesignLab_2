<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js"></script>
    <title>Add New User</title>
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
            <button type="button" class="btn purple darken-2 " id="SignUp" onClick="document.location='../service/LogOut.php'">Log Out</button>
        </ul>
    </div>
</nav>


    <div class="container row" style=" margin-top: 80px;" >
        <form action="../service/addnewuser.php" method="POST" style="border: 2px black  ; padding: 30px;">
            <div class="form-group">
                <input type="text" class="form-control" name="login" placeholder="login" required>
                <span class="helper-text" data-error="Что-то неправильно!" data-success="right"></span>
            </div>
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

            <button id="btn" type="submit" class="btn purple darken-2 col s4 offset-s4">Add User</button>
        </form>
    </div>

</body>
<script src="../assets/js/confirmPassword.js"></script>
</html>