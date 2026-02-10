<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, REVERSE(fullname) AS reversed_name FROM records";
$result = $conn->query($sql);
?>

<h1>REVERSE() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Reversed Name</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['reversed_name']}</td>
    </tr>";
}
$conn->close();
?>
</table>
