<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, 
        SUBSTRING_INDEX(fullname, ' ', 1) AS first_word,
        SUBSTRING_INDEX(fullname, ' ', -1) AS last_word
        FROM records";
$result = $conn->query($sql);
?>

<h1>SUBSTRING_INDEX() String Function Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>First Word</th>
<th>Last Word</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['fullname']}</td>     
    <td>{$row['first_word']}</td>
    <td>{$row['last_word']}</td>
    </tr>";
}
$conn->close();
?>
</table>