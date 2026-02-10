<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, LCASE(fullname) AS lower_name FROM records";
$result = $conn->query($sql);
?>

<h1>LCASE() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Lowercase Name</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['lower_name']}</td>
    </tr>";
}
$conn->close();
?>
</table>
