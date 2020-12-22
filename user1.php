<?php

session_start();
if(isset($_SESSION['role'])){
        echo "<nav class='purple darken-2'>";
        echo "<div class='container nav-wrapper'>";
        echo "<a href='../main.php' class='brand-logo'>Logo</a>";
        echo "<ul id='nav-mobile' class='right hide-on-med-and-down'>";
        echo "<li><a href='./edit.php'>";
        echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' >";
        echo $_SESSION['first_name'];
        echo "</button>";
        echo "</a></li>";
        echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' onClick=document.location=exit.php>Sigexit.php  ";
 echo "</button>";
        echo "</ul>";
        echo "</div>";
        echo "</nav>";

} else {
    echo "<nav class='purple darken-2'>";
    echo "<div class='container nav-wrapper'>";
    echo "<a href='../main.php' class='brand-logo'>Logo</a>";
    echo "<ul id='nav-mobile' class='right hide-on-med-and-down'>";
    echo "<button type='button' class='btn purple darken-2' id='signIn' onClick=document.location=../pages/login.php>Sign In</button>";
    echo "<button type='button' class='btn purple darken-2' id='signIn' onClick=document.location=../pages/registration.php>Sign Up</button>";
    echo "</div>";
    echo "</nav>";
}

?>