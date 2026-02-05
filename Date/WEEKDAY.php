<?php
include "../dbcon.php";

//0=Monday, 6=Sunday
$sql = "SELECT id, fullname, birthday, WEEKDAY(birthday) AS weekday_number FROM records";
$result = $conn->query($sql);
?>

<h1>WEEKDAY() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Weekday Number</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['weekday_number']}</td>
</tr>";
}
$conn->close();
?>
</table>
