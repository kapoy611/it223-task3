<?php
include "../dbcon.php";

// diff btwn two login times
$sql = "SELECT r1.id, r1.fullname, TIMEDIFF(r1.login_time, r2.login_time) AS time_difference 
        FROM records r1, records r2 
        WHERE r1.id=1 AND r2.id=2";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>TIMEDIFF() Example</h1>
<p>Difference between Norinne and Raihany login times: <?php echo $row['time_difference']; ?></p>
