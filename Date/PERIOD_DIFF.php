<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, PERIOD_DIFF(202404, 202402) AS period_difference FROM records LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>PERIOD_DIFF() Example</h1>
<p>Difference between 202404 and 202402: <?php echo $row['period_difference']; ?> months</p>
