<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, score, BIN(score) AS binary_score FROM records";
$result = $conn->query($sql);
?>

<h1>BIN() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Score</th>
<th>Binary Score</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['score']}</td>
<td>{$row['binary_score']}</td>
</tr>";
}
$conn->close();
?>
</table>
