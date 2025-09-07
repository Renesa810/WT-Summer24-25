<?php

$sql2 = "SELECT * FROM user";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {


        echo "<tr>
                <td>" . $row['ID'] . "</td>
                <td>" . $row['Username'] . "</td>
                <td>" . $row['Email'] . "</td>
                <td>" . $row['Phone'] . "</td>
                <td>" . $row['Password'] . "</td>
                <td>" . $row['Address'] . "</td>

                <td>
        <a href='user.php?edit_id=" . $row['ID'] . "' style='background-color:orange;color:white;padding:5px;'>Edit</a>
        <a href='user.php?delete_id=" . $row['ID'] . "' style='background-color:red;color:white;padding:5px;'>Delete</a>
      </td>

                
              </tr>";
    }
}
else {
    echo "<tr><td colspan='6' style='text-align:center;'>No customers Found</td></tr>";
}

?>