<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, RTRIM(fullname) AS trimmed_name FROM records";
$result = $conn->query($sql);
?>

<h1>RTRIM() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name (Original)</th>
<th>Full Name (RTRIM)</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>'{$row['fullname']}'</td>
    <td>'{$row['trimmed_name']}'</td>
    </tr>";
}
$conn->close();
?>
</table>
