<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, CHARACTER_LENGTH(fullname) AS char_length FROM records";
$result = $conn->query($sql);
?>

<h1>CHARACTER_LENGTH() String Function Example</h1>
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
    <td>{$row['char_length']}</td>
    </tr>";
}
$conn->close();
?>
</table>
