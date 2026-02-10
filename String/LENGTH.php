<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, LENGTH(fullname) AS name_length FROM records";
$result = $conn->query($sql);
?>

<h1>LENGTH() Example</h1>
<table border="1" cellpadding="5">
<tr><th>ID</th><th>Full Name</th><th>Length</th></tr>
<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['name_length']}</td>
    </tr>";
}
$conn->close();
?>
</table>
