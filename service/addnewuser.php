<?php
    require_once "../db.php";
    $query = "insert into users(login, first_name, last_name, password, role_id)
VALUES(
'".$_POST['login']."',
'".$_POST['first_name']."',
'".$_POST['last_name']."',
'".$_POST['password']."',
'".$_POST['role']."'
);";

if (mysqli_query($conn, $query)) {
    mysqli_close($conn);
    header('Location: ../main.php');
} else {
    echo "Ошибка!!!";
    mysqli_close($conn);
}