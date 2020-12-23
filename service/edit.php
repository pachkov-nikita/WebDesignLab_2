<?php
session_start();
    require_once "../db.php";

if (mysqli_query($conn, "update users set first_name = '".$_POST['first_name']."', last_name = '".$_POST['last_name']."',  password = '".$_POST['password']. "', role_id = '".$_POST['role']."' where id = '".$_SESSION['id']."';")) {
    mysqli_close($conn);
    header('Location: ../main.php');
} else {
    echo "Ошибка!!!";
    mysqli_close($conn);
}