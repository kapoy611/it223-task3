<?php
include "../dbcon.php";

$sql = "SELECT AVG(score) AS result FROM records";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>AVG() Example</h1>
<p>Average Score: <?php echo $row['result']; ?></p>

<?php $conn->close(); ?>
