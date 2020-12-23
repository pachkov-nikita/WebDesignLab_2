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
    session_start();
    $query2 = "select users.id, users.login, users.first_name, users.last_name, users.photo, roles.title from users where first_name = '".$_POST['first_name']."' and last_name = '".$_POST['last_name']."' and password = '".$_POST['password']."';";
    $res = mysqli_query($conn, $query2);
    $row = mysqli_fetch_array($res);
    $_SESSION['role'] = $row['role_id'];
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['id'] = $row['id'];
    mysqli_close($conn);
    header('Location: ../main.php');
} else {
    echo "Ошибка!!! ";
    mysqli_close($conn);
}