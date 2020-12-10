<?php
session_start();
if($_SESSION['role'] == '2'){
    header('Location: pages/users.php');
} elseif($_SESSION['role'] == '1'){
    header('Location: pages/admin.php');
} else {
    header('Location: pages/guest.php');
}