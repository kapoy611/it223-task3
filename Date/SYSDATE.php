<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, SYSDATE() AS current_sysdate FROM records LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>SYSDATE() Example</h1>
<p>Current System Date & Time: <?php echo $row['current_sysdate']; ?></p>
