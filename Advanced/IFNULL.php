<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, IFNULL(optional_field, 'N/A') AS status FROM records";
$result = $conn->query($sql);
?>

<h1>IFNULL() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Status</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['status']}</td>
</tr>";
}
$conn->close();
?>
</table>
