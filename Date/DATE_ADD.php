<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, birthday, DATE_ADD(birthday, INTERVAL 1 YEAR) AS birthday_next_year FROM records";
$result = $conn->query($sql);
?>

<h1>DATE_ADD() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Birthday + 1 Year</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['birthday_next_year']}</td>
</tr>";
}
$conn->close();
?>
</table>
