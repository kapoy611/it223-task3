<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, score, amount, score DIV 10 AS result FROM records";
$result = $conn->query($sql);
?>

<h1>DIV() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Score</th>
<th>Result (Score DIV 10)</th>
</tr>

<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['score']}</td>
<td>{$row['result']}</td>
</tr>";
    }
}
$conn->close();
?>
</table>
