<?php
include "../dbcon.php";

// week number for birthday
$sql = "SELECT id, fullname, birthday, WEEK(birthday) AS week_number FROM records";
$result = $conn->query($sql);
?>

<h1>WEEK() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Week Number</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['week_number']}</td>
</tr>";
}
$conn->close();
?>
</table>
