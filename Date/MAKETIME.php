<?php
include "../dbcon.php";

// Example: Create a time from hour, minute, second
$sql = "SELECT id, fullname, MAKETIME(14, 30, 45) AS custom_time FROM records LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>MAKETIME() Example</h1>
<p>Time created: <?php echo $row['custom_time']; ?></p>
