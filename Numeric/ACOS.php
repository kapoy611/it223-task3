<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, score, ACOS(score/100) AS result FROM records";
$result = $conn->query($sql);
?>

<h1>ACOS() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Score</th>
<th>Result</th>
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
