<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, SUBSTRING(fullname, 2, 3) AS sub_name FROM records";
$result = $conn->query($sql);
?>

<h1>SUBSTRING() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Extracted Substring (pos 2, len 3)</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['sub_name']}</td>
    </tr>";
}
$conn->close();
?>
</table>
