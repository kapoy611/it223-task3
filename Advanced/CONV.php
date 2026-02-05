<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, score, CONV(score, 10, 2) AS score_binary FROM records";
$result = $conn->query($sql);
?>

<h1>CONV() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Score</th>
<th>Score in Binary (Base 2)</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['score']}</td>
<td>{$row['score_binary']}</td>
</tr>";
}
$conn->close();
?>
</table>
