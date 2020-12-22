<table class="container centered striped" style="margin-top: 100px;">
    <thead class="purple darken-2">

        <th>#</th>
         <th>Login</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Role</th>
    </tr>

    </thead>

    <tbody>
    <?php
    require_once "../db.php";
    $res = mysqli_query($conn, "select users.id, users.login,users.first_name, users.last_name, users.photo, roles.title from users join roles on users.role_id = roles.id;");
    $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
    for($i = 0; $i < count($row); $i++){
        echo "<tr >";
        echo "<td><a class='user_id' href='./user.php?user=".$row[$i]['id']."'>" . $row[$i]['id'] . "</a></td>";
        echo "<td>" . $row[$i]['login'] . "</td>";
        echo "<td>" . $row[$i]['first_name'] . "</td>";
        echo "<td>" . $row[$i]['last_name'] . "</td>";
        echo "<td>" . $row[$i]['title'] . "</td>";
        echo "</tr>";
    }
    mysqli_close($conn);
    ?>
    </tbody>
</table>