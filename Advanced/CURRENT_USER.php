<?php
include "../dbcon.php";

$sql = "SELECT CURRENT_USER() AS current_user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>CURRENT_USER() Example</h1>
<p>Current User: <?php echo $row['current_user']; ?></p>

<?php $conn->close(); ?>
