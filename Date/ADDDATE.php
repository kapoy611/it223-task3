<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, birthday, ADDDATE(birthday, INTERVAL 10 DAY) AS add_10_days FROM records";
$result = $conn->query($sql);
?>

<h1>ADDDATE() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Birthday + 10 Days</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['fullname']}</td>
            <td>{$row['birthday']}</td>
            <td>{$row['add_10_days']}</td>
        </tr>";
}
$conn->close();
?>
</table>
