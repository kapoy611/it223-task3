<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, USER() AS 'current_user' FROM records";
$result = $conn->query($sql);
?>

<h1>USER() Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Current MySQL User</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['current_user']}</td>
    </tr>";
}
$conn->close();
?>
</table>
