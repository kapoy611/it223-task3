<?php
include "../dbcon.php";

$sql = "SELECT SESSION_USER() AS session_user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>SESSION_USER() Example</h1>
<p>Session User: <?php echo $row['session_user']; ?></p>

<?php $conn->close(); ?>
