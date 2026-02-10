<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, CONCAT(fullname, SPACE(5), 'END') AS spaced_name FROM records";
$result = $conn->query($sql);
?>

<h1>SPACE() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Full Name + 5 Spaces + 'END'</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['spaced_name']}</td>
    </tr>";
}
$conn->close();
?>
</table>
