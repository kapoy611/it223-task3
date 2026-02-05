<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, STR_TO_DATE('21-05-2003', '%d-%m-%Y') AS formatted_date FROM records LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>STR_TO_DATE() Example</h1>
<p>String '21-05-2003' converted to date: <?php echo $row['formatted_date']; ?></p>
