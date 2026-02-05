<?php
include "../dbcon.php";

$sql = "SELECT DATABASE() AS db_name";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>DATABASE() Example</h1>
<p>Current Database: <?php echo $row['db_name']; ?></p>

<?php $conn->close(); ?>
