<?php
include "../dbcon.php";

//HH:MM AM/PM
$sql = "SELECT id, fullname, login_time, TIME_FORMAT(login_time, '%h:%i %p') AS formatted_time FROM records";
$result = $conn->query($sql);
?>

<h1>TIME_FORMAT() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Login Time</th>
<th>Formatted Time</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['login_time']}</td>
<td>{$row['formatted_time']}</td>
</tr>";
}
$conn->close();
?>
</table>
