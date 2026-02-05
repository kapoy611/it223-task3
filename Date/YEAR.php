<?php
include "../dbcon.php";

// Extract year from birthday
$sql = "SELECT id, fullname, birthday, YEAR(birthday) AS year_part FROM records";
$result = $conn->query($sql);
?>

<h1>YEAR() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Year</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['year_part']}</td>
</tr>";
}
$conn->close();
?>
</table>
