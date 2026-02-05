<?php
include "../dbcon.php";

//subtract 2 hours 15 minutes from login_time
$sql = "SELECT id, fullname, login_time, SUBTIME(login_time, '02:15:00') AS adjusted_time FROM records";
$result = $conn->query($sql);
?>

<h1>SUBTIME() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Login Time</th>
<th>Adjusted Time</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['login_time']}</td>
<td>{$row['adjusted_time']}</td>
</tr>";
}
$conn->close();
?>
</table>
