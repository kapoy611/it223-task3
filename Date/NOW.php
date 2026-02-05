<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, NOW() AS current_datetime FROM records LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>NOW() Example</h1>
<p>Current Date & Time: <?php echo $row['current_datetime']; ?></p>
