<?php
include "../dbcon.php";

// adds 3 months 
$sql = "SELECT id, fullname, PERIOD_ADD(202402, 3) AS new_period FROM records LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>PERIOD_ADD() Example</h1>
<p>New period after adding 3 months to 202402: <?php echo $row['new_period']; ?></p>
