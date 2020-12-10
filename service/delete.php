<?php
session_start();
    require_once "../db.php";


if (mysqli_query($conn, "delete from users where id = '". $_SESSION['id']."'")) {
    mysqli_close($conn);
    session_destroy();
    header('Location: ../main.php');
} else {

}