<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, REPEAT(fullname, 2) AS repeated_name FROM records";
$result = $conn->query($sql);
?>

<h1>REPEAT() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Repeated Name (x2)</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['repeated_name']}</td>
    </tr>";
}
$conn->close();
?>
</table>
