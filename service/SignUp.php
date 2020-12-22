<?php
    require_once "../db.php";
    $query = "INSERT INTO users(first_name, last_name, password, role_id)
VALUES(
'".$_POST['first_name']."',
'".$_POST['last_name']."',
'".$_POST['password']."',
'".$_POST['role']."'
);";

if (mysqli_query($conn, $query)) {
    session_start();
    $res = mysqli_query($conn, "select users.id, users.first_name, users.last_name, users.photo, roles.title from users where first_name = '".$_POST['first_name']."' and last_name = '".$_POST['last_name']."' and password = '".$_POST['password']."';");
    $row = mysqli_fetch_array($res);
    $_SESSION['role'] = $row['role_id'];
    $_SESSION['first_name'] = $row['first_name'];
    $_SESSION['id'] = $row['id'];
    mysqli_close($conn);
    header('Location: ../main.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}