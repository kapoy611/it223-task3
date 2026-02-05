<?php
include "../dbcon.php";

// Week number of the year 
$sql = "SELECT id, fullname, birthday, WEEKOFYEAR(birthday) AS week_of_year FROM records";
$result = $conn->query($sql);
?>

<h1>WEEKOFYEAR() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Birthday</th>
<th>Week of Year</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['birthday']}</td>
<td>{$row['week_of_year']}</td>
</tr>";
}
$conn->close();
?>
</table>
