<?php
include "../dbcon.php";

$sql = "SELECT VERSION() AS mysql_version";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>VERSION() Example</h1>
<p>MySQL Version: <?php echo $row['mysql_version']; ?></p>

<?php $conn->close(); ?>