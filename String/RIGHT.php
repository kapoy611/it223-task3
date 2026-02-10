<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, RIGHT(fullname, 3) AS last_three FROM records";
$result = $conn->query($sql);
?>

<h1>RIGHT() Example</h1>
<table border="1" cellpadding="5">
<tr><th>ID</th><th>Full Name</th><th>Last 3 Letters</th></tr>
<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['last_three']}</td>
    </tr>";
}
$conn->close();
?>
</table>
