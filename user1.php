<?php

session_start();
if(isset($_SESSION['role'])){
    if($_SESSION['role'] == 1){
        echo "<nav class='purple darken-2'>";
        echo "<div class='container nav-wrapper'>";
        echo "<a href='../main.php' class='brand-logo'>Logo</a>";
        echo "<ul id='nav-mobile' class='right hide-on-med-and-down'>";
        echo "<li><a href='./edit.php'>";
        echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' >";
        echo $_SESSION['first_name'];
        echo "</button>";
        echo "</a></li>";
        echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' onClick=document.location='../service/LogOut.php'>Sign Out";
        echo "</button>";
        echo "</ul>";
        echo "</div>";
        echo "</nav>";
    } else {
            echo "<nav class='purple darken-2'>";
            echo "<div class='container nav-wrapper'>";
            echo "<a href='../main.php' class='brand-logo'>Logo</a>";
            echo "<ul id='nav-mobile' class='right hide-on-med-and-down'>";
            echo "<li><a href='./editForUser.php'>";
            echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' >";
            echo $_SESSION['first_name'];
            echo "</button>";
            echo "</a></li>";
            echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' onClick=document.location='../service/LogOut.php'>Sign Out";
            echo "</button>";
            echo "</ul>";
            echo "</div>";
            echo "</nav>";
        }
} else {
    echo "<nav class='purple darken-2'>";
    echo "<div class='container nav-wrapper'>";
    echo "<a href='../main.php' class='brand-logo'>Logo</a>";
    echo "<ul id='nav-mobile' class='right hide-on-med-and-down'>";
    echo "<button id='btn' type='submit' class='modal-trigger btn purple darken-2 col s4 offset-s9' href='#modal1'>Sign In";
    echo "<button id='btn' type='submit' class='btn purple darken-2 col s4 offset-s9' onClick=document.location='../service/LogOut.php'>Sign Out";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";
}

?>