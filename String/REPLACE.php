<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, REPLACE(fullname, 'a', '@') AS replaced_name FROM records";
$result = $conn->query($sql);
?>

<h1>REPLACE() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Replaced Name ('a' → '@')</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['replaced_name']}</td>
    </tr>";
}
$conn->close();
?>
</table>
