<?php
include "../dbcon.php";

$sql = "SELECT CONNECTION_ID() AS connection_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>CONNECTION_ID() Example</h1>
<p>Your connection ID is: <?php echo $row['connection_id']; ?></p>

<?php $conn->close(); ?>
