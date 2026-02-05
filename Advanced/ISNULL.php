<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, ISNULL(optional_field) AS is_null FROM records";
$result = $conn->query($sql);
?>

<h1>ISNULL() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Is Null?</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['is_null']}</td>
</tr>";
}
$conn->close();
?>
</table>
