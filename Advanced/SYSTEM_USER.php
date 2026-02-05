<?php
include "../dbcon.php";

$sql = "SELECT SYSTEM_USER() AS system_user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>SYSTEM_USER() Example</h1>
<p>System User: <?php echo $row['system_user']; ?></p>

<?php $conn->close(); ?>
