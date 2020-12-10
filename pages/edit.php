<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js"></script>
    <script src='../assets/js/confirmPassword.js'></script>
    <script src ="../assets/js/login.js"></script>

    <title>Edit</title>
</head>
<body>

    <?php
    session_start();
    require_once '../db.php';

        $res = mysqli_query($conn, "select * from users where id = '".$_SESSION['id']."';");
        $row = mysqli_fetch_array($res);

    echo "<nav class='purple darken-2'>";
        echo "<div class='container nav-wrapper'>";
        echo "<a href='/' class='brand-logo'>Logo</a>";
        echo "<ul id='nav-mobile' class='right hide-on-med-and-down'>";
            echo "<li><a href='../service/LogOut.php'>Sign Out</a></li>";
        echo "</ul>";
        echo "</div>";
    echo "</nav>";

    // Table
    echo "<div class='container row' style=' margin-top: 50px;' >";

    echo "<div class='col s3 offset-s1 '>";
        echo "<img src='".$row['photo']."' alt='Photo' class='rectangle' width='200' height='100'/>";
        
        echo "<form action='../service/upload.php' method='POST' enctype='multipart/form-data'>";
            echo "<div class='file-field input-field'>";
                echo "<div class='btn purple darken-2'>";
                    echo "<span>File</span>";
                    echo "<input type='file' name='fileToUpload' id='fileToUpload'>";
                echo "</div>";
                echo "<div class='file-path-wrapper'>";
                    echo "<input class='file-path validate' >";
                echo "</div>";
            echo "</div>";
            echo "<input type='submit' value='Upload Image' class='btn purple darken-2 col s10 offset-s4' name='submit'>";
        echo "</form>";
        echo "</div>";
        echo "<form action='../service/edit.php' method='POST' class='col s4 offset-s3 ' style='border: 1px solid purple; padding: 30px;'>";
        echo  "<div>";

        echo"<input type='text'class='form-control' name='first_name' placeholder='First Name' required>";
               echo "<span class='helper-text' data-error='Что-то неправильно!' data-success='right'></span>";
            echo "</div>";
            echo "<div class='form-group'>";
                echo "<input type='text' class='form-control' name='last_name' placeholder='Last Name' required>";
               echo "<span class='helper-text' data-error='Что-то неправильно!' data-success='right'></span>";
            echo "</div>";
            echo "<div class='form-group'>";
             echo   "<select class='browser-default' name='role'>";
              echo "<option value='2' disabled selected>Role</option>";
              echo  "<option value='1'>Admin</option>";
              echo "<option value='2''>User</option>";
               echo" </select>";
            echo "</div>";
            echo "<div class='form-group'>";
             echo   "<input id='password' type='password' class='validate' for='password' placeholder='Password'required'>";
             echo   "<span class='helper-text' data-error='Минимальное количество символов 6' data-success='Correct'></span>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo  "<input id='password' type='password' class='validate' for='confirm_password' placeholder='Confirm Password' required>";
             echo   " <span class='helper-text' data-error='Минимальное количество символов 6' data-success='Correct'></span>";
           echo "</div>";


            echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' >Edit</button>";

            echo "<button id='btn2' type='submit' class='btn red col s4 offset-s4' >delete</button>";
        echo "</form>";
    echo "</div>";
    mysqli_close($conn);

?>

</body>
</html>