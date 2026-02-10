<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, FIND_IN_SET(fullname, 'Norinne,David,Crisanna') AS position FROM records";
$result = $conn->query($sql);
?>

<h1>FIND_IN_SET() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Position in List</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['position']}</td>
    </tr>";
}
$conn->close();
?>
</table>
