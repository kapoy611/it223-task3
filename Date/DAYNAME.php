<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, birthday, DAYNAME(birthday) AS weekday_name FROM records";
$result = $conn->query($sql);
?>

<h1>DAYNAME() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Weekday Name</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['weekday_name']}</td>
</tr>";
}
$conn->close();
?>
</table>
