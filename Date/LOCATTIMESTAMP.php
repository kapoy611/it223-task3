<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, LOCALTIMESTAMP() AS 'local_timestamp' FROM records";
$result = $conn->query($sql);
?>

<h1>LOCALTIMESTAMP() Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Local Date & Time</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['local_timestamp']}</td>
    </tr>";
}
$conn->close();
?>
</table>
