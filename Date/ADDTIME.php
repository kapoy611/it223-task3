<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, login_datetime, ADDTIME(login_datetime, '02:30:00') AS added_time FROM records";
$result = $conn->query($sql);
?>

<h1>ADDTIME() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Login Datetime</th>
<th>Login + 2h30m</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['login_datetime']}</td>
<td>{$row['added_time']}</td>
</tr>";
}
$conn->close();
?>
</table>
