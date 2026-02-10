<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, LEFT(fullname, 3) AS first_three FROM records";
$result = $conn->query($sql);
?>

<h1>LEFT() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>First 3 Characters</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['first_three']}</td>
    </tr>";
}
$conn->close();
?>
</table>
