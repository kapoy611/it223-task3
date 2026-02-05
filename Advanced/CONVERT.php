<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, CONVERT(score, CHAR) AS score_char FROM records";
$result = $conn->query($sql);
?>

<h1>CONVERT() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Score (CHAR)</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['score_char']}</td>
</tr>";
}
$conn->close();
?>
</table>
