<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, ASCII(fullname) AS ascii_value FROM records";
$result = $conn->query($sql);
?>
<h1>ASCII() String Function Example</h1>
<table border="1" cellpadding="5">      
<tr>
<th>ID</th>
<th>Full Name</th>
<th>ASCII Value</th>
</tr>
<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['ascii_value']}</td>
    </tr>";
}
$conn->close();
?>
</table>