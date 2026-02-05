<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, birthday, FROM_DAYS(TO_DAYS(birthday)) AS same_date FROM records";
$result = $conn->query($sql);
?>

<h1>FROM_DAYS() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Date from Days</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['same_date']}</td>
</tr>";
}
$conn->close();
?>
</table>
