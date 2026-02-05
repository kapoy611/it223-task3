<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, SEC_TO_TIME(5000) AS time_from_seconds FROM records LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>SEC_TO_TIME() Example</h1>
<p>5000 seconds = <?php echo $row['time_from_seconds']; ?></p>
