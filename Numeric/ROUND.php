<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, amount, ROUND(amount, 0) AS rounded_0, ROUND(amount, 2) AS rounded_2 FROM records";
$result = $conn->query($sql);
?>

<h1>ROUND() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Amount</th>
<th>Rounded (0 decimals)</th>
<th>Rounded (2 decimals)</th>
</tr>

<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['amount']}</td>
<td>{$row['rounded_0']}</td>
<td>{$row['rounded_2']}</td>
</tr>";
    }
}
$conn->close();
?>
</table>
