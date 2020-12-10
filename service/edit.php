<?php
session_start();
    require_once "../db.php";

if (mysqli_query($conn, "update users set first_name = '".$_POST['first_name']."', last_name = '".$_POST['last_name']."', role_id = '".$_POST['role']."', password = '".$_POST['password']."' where id = '".$_SESSION['id']."';")) {
    mysqli_close($conn);
    header('Location: ../main.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}