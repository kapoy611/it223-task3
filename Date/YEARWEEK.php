<?php
include "../dbcon.php";

// Get year and week number
$sql = "SELECT id, fullname, birthday, YEARWEEK(birthday) AS year_week FROM records";
$result = $conn->query($sql);
?>

<h1>YEARWEEK() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>YearWeek</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['year_week']}</td>
</tr>";
}
$conn->close();
?>
</table>
