<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, BINARY(nickname) AS binary_nickname FROM records";
$result = $conn->query($sql);
?>

<h1>BINARY() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Binary Nickname</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['binary_nickname']}</td>
</tr>";
}
$conn->close();
?>
</table>
