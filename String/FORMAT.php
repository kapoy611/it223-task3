<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, FORMAT(1235.6789, 2) AS formatted_number FROM records";
$result = $conn->query($sql);
?>

<h1>FORMAT() Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Formatted Number</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['formatted_number']}</td>
    </tr>";
}
$conn->close();
?>
</table>
