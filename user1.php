<?php

session_start();

        echo "<nav class='purple darken-2'>";
        echo "<div class='container nav-wrapper'>";
        echo "<a href='../main.php' class='brand-logo'>Logo</a>";
        echo "<ul id='nav-mobile' class='right hide-on-med-and-down'>";
    if(isset($_SESSION['role'])){
        echo "<li><a href='./edit.php'>";
        echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' >";
        echo $_SESSION['first_name'];
        echo "</button>";
        echo "</a></li>";
        echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' onClick=document.location=../service/exit.php>Sign Out </button>";


    } else {

    echo "<button type='button' class='btn purple darken-2' id='signIn' onClick=document.location=../pages/login.php>Sign In</button>";
    echo "<button type='button' class='btn purple darken-2' id='signIn' onClick=document.location=../pages/registration.php>Sign Up</button>";

    }
echo "</ul>";
echo "</div>";
echo "</nav>";
?>