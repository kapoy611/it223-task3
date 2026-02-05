<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, score, NULLIF(score, 95) AS nullif_example FROM records";
$result = $conn->query($sql);
?>

<h1>NULLIF() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Score</th>
<th>NULLIF(Score, 95)</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['score']}</td>
<td>{$row['nullif_example']}</td>
</tr>";
}
$conn->close();
?>
</table>
