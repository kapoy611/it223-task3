<?php
include "../dbcon.php";

// create timestamp from date and time
$sql = "SELECT id, fullname, TIMESTAMP(birthday, login_time) AS combined_datetime FROM records LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>TIMESTAMP() Example</h1>
<p>Combined Birthday and Login Time: <?php echo $row['combined_datetime']; ?></p>
