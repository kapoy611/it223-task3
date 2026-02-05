<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, birthday, DATE_SUB(birthday, INTERVAL 5 DAY) AS minus_5_days FROM records";
$result = $conn->query($sql);
?>

<h1>DATE_SUB() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Birthday - 5 Days</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['minus_5_days']}</td>
</tr>";
}
$conn->close();
?>
</table>
