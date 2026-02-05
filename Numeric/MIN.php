<?php
include "../dbcon.php";

$sql = "SELECT MIN(score) AS min_score, MIN(amount) AS min_amount FROM records";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>MIN() Example</h1>
<p>Minimum Score: <?php echo $row['min_score']; ?></p>
<p>Minimum Amount: <?php echo $row['min_amount']; ?></p>

<?php $conn->close(); ?>
