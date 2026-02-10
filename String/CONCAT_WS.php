<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, CONCAT_WS(' ', fullname, 'Student') AS label FROM records";
$result = $conn->query($sql);
?>

<h1>CONCAT_WS() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Concatenated Label</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['label']}</td>
    </tr>";
}
$conn->close();
?>
</table>
