<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, CURRENT_TIME() AS 'current_time' FROM records";
$result = $conn->query($sql);

if (!$result) {
    die("SQL Error: " . $conn->error);
}
?>

<h1>CURRENT_TIME() Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Current Time</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['fullname']}</td>
            <td>{$row['current_time']}</td>
        </tr>";
}
$conn->close();
?>
</table>
