<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, CURRENT_DATE() AS today_date FROM records";
$result = $conn->query($sql);
?>

<h1>CURRENT_DATE() Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Today's Date</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>
    <td>{$row['today_date']}</td>
    </tr>";
}
$conn->close();
?>
</table>
