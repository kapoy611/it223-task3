<?php
include "../dbcon.php";

//convert login_time to total seconds
$sql = "SELECT id, fullname, login_time, TIME_TO_SEC(login_time) AS seconds_total FROM records";
$result = $conn->query($sql);
?>

<h1>TIME_TO_SEC() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Login Time</th>
<th>Seconds Total</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['login_time']}</td>
<td>{$row['seconds_total']}</td>
</tr>";
}
$conn->close();
?>
</table>
