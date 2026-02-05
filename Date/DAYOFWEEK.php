<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, birthday, DAYOFWEEK(birthday) AS weekday_index FROM records";
$result = $conn->query($sql);
?>

<h1>DAYOFWEEK() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Weekday Index</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['weekday_index']}</td>
</tr>";
}
$conn->close();
?>
</table>
