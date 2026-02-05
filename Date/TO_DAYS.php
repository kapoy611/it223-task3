<?php
include "../dbcon.php";

//days since 0000-00-00 for birthday
$sql = "SELECT id, fullname, birthday, TO_DAYS(birthday) AS days_since_zero FROM records";
$result = $conn->query($sql);
?>

<h1>TO_DAYS() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Days Since 0000-00-00</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['days_since_zero']}</td>
</tr>";
}
$conn->close();
?>
</table>
