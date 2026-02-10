<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, 
        INSERT(fullname, 2, 3, '***') AS modified_name 
        FROM records";
$result = $conn->query($sql);
?>

<h1>INSERT() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Modified Name</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['modified_name']}</td>
    </tr>";
}
$conn->close();
?>
</table>
