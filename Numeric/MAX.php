<?php
include "../dbcon.php";

$sql = "SELECT MAX(score) AS max_score, MAX(amount) AS max_amount FROM records";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>MAX() Example</h1>
<p>Maximum Score: <?php echo $row['max_score']; ?></p>
<p>Maximum Amount: <?php echo $row['max_amount']; ?></p>

<?php $conn->close(); ?>
