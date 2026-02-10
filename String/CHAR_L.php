<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, CHAR_LENGTH(fullname) AS char_len FROM records";
$result = $conn->query($sql);
?>

<h1>CHAR_LENGTH() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Character Length</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['char_len']}</td>
    </tr>";
}
$conn->close();
?>
</table>
