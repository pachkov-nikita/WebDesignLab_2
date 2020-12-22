<?php
session_start();
require_once '../db.php';
	if (count($_POST)>0) {
        $res = mysqli_query($conn, "select users.id, users.first_name, users.role_id from users where last_name = '".$_POST['last_name']."' and password = '".$_POST['password']."';");
        $row = mysqli_fetch_array($res);

		if (is_array($row)){
            $_SESSION['role'] = $row['role_id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['id'] = $row['id'];
            mysqli_close($conn);
            header('Location: ../main.php');
} else {
    echo 'Ошибка в данных!!!';
    mysqli_close($conn);
   }
}
