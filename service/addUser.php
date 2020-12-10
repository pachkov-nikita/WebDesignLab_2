<?php
    require_once "../db.php";
    $query = "insert into users(first_name, last_name, password, role_id)
VALUES(
'".$_POST['first_name']."',
'".$_POST['last_name']."',
'".$_POST['password']."',
'".$_POST['role']."'
);";

if (mysqli_query($conn, $query)) {
    mysqli_close($conn);
    header('Location: ../main.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}