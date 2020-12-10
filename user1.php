<?php

session_start();
if(isset($_SESSION['role'])){
    echo "<nav class='purple darken-2'>";
    echo "<div class='container nav-wrapper'>";
    echo "<a href='/' class='brand-logo'>Logo</a>";
    echo "<ul id='nav-mobile' class='right hide-on-med-and-down'>";
    echo "<li><a href='./edit.php'>";
    echo $_SESSION['first_name'];
    echo "</a></li>";
    echo "<li><a href='../service/logout.php'>Sign Out</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";
} else {
    echo "<nav class='purple darken-2'>";
    echo "<div class='container nav-wrapper'>";
    echo "<a href='/' class='brand-logo'>Logo</a>";
    echo "<ul id='nav-mobile' class='right hide-on-med-and-down'>";
    echo "<li><a class='modal-trigger' href='#modal1'>Sign In</a></li>";
    echo "<li><a href='./signup.php'>Sign Up</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";
}

?>