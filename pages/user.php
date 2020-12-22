<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js"></script>
    <script src ="../assets/js/login.js"></script>
    <title>Home page</title>
</head>
<body>

<?php
require_once('../user1.php');
?>

<div id="modal1" class="modal">
    <div class="modal-content">
        <form action="../service/auth.php" method="POST" class="" style="">
            <div class="form-group">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="modal-footer">
                <button id="btn" type="submit" class="button">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php
    echo "<table class='container centered ' style='margin-top: 150px;'>";
    echo "<thead class='purple darken-2'>";
    echo "<tr>";
    echo " <th>Photo</th>";
    echo "<th>#</th>";
    echo "    <th>First Name</th>";
    echo "    <th>Last Name</th>";
    echo "    <th>Role</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    require_once "../db.php";

        $res = mysqli_query($conn, "select users.id, users.first_name, users.last_name, users.photo, roles.title from users join roles on users.role_id = roles.id where users.id =".$_GET['user'].";");
        $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
        for($i = 0; $i < count($row); $i++){
            echo "<tr >";
            echo "<td><img src='" .$row[$i]['photo']. "' alt='Photo' class='rectangle' width='200' height='100'></td>";
            echo "<td>" .$row[$i]['id']. "</td>";
            echo "<td>" . $row[$i]['first_name'] . "</td>";
            echo "<td>" . $row[$i]['last_name'] . "</td>";
            echo "<td>" . $row[$i]['title'] . "</td>";
            echo "</tr>";
        }
        mysqli_close($conn);


      echo" </tbody>";
    echo "</table>";

    ?>

    </tbody>
</table>

</body>
</html>