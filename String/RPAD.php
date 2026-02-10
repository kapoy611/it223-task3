<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, RPAD(fullname, 10, '*') AS padded_name FROM records";
$result = $conn->query($sql);
?>

<h1>RPAD() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Padded Name (Length 10)</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['padded_name']}</td>
    </tr>";
}
$conn->close();
?>
</table>
