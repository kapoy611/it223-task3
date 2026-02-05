<?php
include "../dbcon.php";

$sql = "SELECT CURTIME() AS cur_time";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>CURTIME() Example</h1>
<p>Current Time: <?php echo $row['cur_time']; ?></p>

<?php $conn->close(); ?>
