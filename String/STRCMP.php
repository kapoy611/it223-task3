<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, STRCMP(fullname, 'Alice') AS comparison_result FROM records";
$result = $conn->query($sql);
?>

<h1>STRCMP() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Comparison with 'Alice'</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['comparison_result']}</td>
    </tr>";
}
$conn->close();
?>
</table>
