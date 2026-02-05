<?php
include "../dbcon.php";

// subtract 7 days 
$sql = "SELECT id, fullname, birthday, SUBDATE(birthday, INTERVAL 7 DAY) AS birthday_minus_7_days FROM records";
$result = $conn->query($sql);
?>

<h1>SUBDATE() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Birthday Minus 7 Days</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['birthday_minus_7_days']}</td>
</tr>";
}
$conn->close();
?>
</table>
