<?php
include "../dbcon.php";

$sql = "SELECT COUNT(*) AS total_records FROM records";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>COUNT() Example</h1>
<p>Total Records: <?php echo $row['total_records']; ?></p>

<?php $conn->close(); ?>
