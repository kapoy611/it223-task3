<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, birthday, EXTRACT(YEAR FROM birthday) AS birth_year FROM records";
$result = $conn->query($sql);
?>

<h1>EXTRACT() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Birth Year</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['birth_year']}</td>
</tr>";
}
$conn->close();
?>
</table>
