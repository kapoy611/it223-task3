<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, birthday, MONTH(birthday) AS month_number FROM records";
$result = $conn->query($sql);
?>

<h1>MONTH() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Month Number</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['month_number']}</td>
</tr>";
}
$conn->close();
?>
</table>
