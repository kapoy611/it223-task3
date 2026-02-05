<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, score, IF(score>=90, 'Pass', 'Fail') AS result FROM records";
$result = $conn->query($sql);
?>

<h1>IF() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Score</th>
<th>Result</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['score']}</td>
<td>{$row['result']}</td>
</tr>";
}
$conn->close();
?>
</table>
