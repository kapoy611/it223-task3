<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, birthday, LAST_DAY(birthday) AS last_day_of_month FROM records";
$result = $conn->query($sql);
?>

<h1>LAST_DAY() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Last Day of Month</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['last_day_of_month']}</td>
</tr>";
}
$conn->close();
?>
</table>
