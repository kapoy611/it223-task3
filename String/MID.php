<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, MID(fullname, 2, 3) AS mid_name FROM records";
$result = $conn->query($sql);
?>

<h1>MID() String Function Example</h1>
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
    <td>{$row['mid_name']}</td>
    </tr>";
}
$conn->close();
?>
</table>
