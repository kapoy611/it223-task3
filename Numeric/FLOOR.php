<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, amount, FLOOR(amount) AS result FROM records";
$result = $conn->query($sql);
?>

<h1>FLOOR() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Amount</th>
<th>Floor Result</th>
</tr>

<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['amount']}</td>
<td>{$row['result']}</td>
</tr>";
    }
}
$conn->close();
?>
</table>
