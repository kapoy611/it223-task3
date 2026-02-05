<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, CAST(score AS CHAR) AS score_string FROM records";
$result = $conn->query($sql);
?>

<h1>CAST() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Score (as string)</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['score_string']}</td>
</tr>";
}
$conn->close();
?>
</table>
