<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, login_datetime, HOUR(login_datetime) AS hour_part FROM records";
$result = $conn->query($sql);
?>

<h1>HOUR() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Login Datetime</th>
<th>Hour Part</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['login_datetime']}</td>
<td>{$row['hour_part']}</td>
</tr>";
}
$conn->close();
?>
</table>
