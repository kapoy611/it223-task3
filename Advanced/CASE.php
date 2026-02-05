<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, score, 
CASE 
    WHEN score >= 90 THEN 'Excellent'
    WHEN score >= 75 THEN 'Good'
    ELSE 'Needs Improvement'
END AS rating
FROM records";
$result = $conn->query($sql);
?>

<h1>CASE() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Score</th>
<th>Rating</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['score']}</td>
<td>{$row['rating']}</td>
</tr>";
}
$conn->close();
?>
</table>
