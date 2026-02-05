<?php
include "../dbcon.php";

// Temporary row to demonstrate LAST_INSERT_ID
$conn->query("INSERT INTO records (fullname, nickname, notes, score, amount, birthday, login_datetime, login_time) VALUES ('Temp User', 'Temp', 'Test', 0, 0, '2000-01-01', NOW(), CURTIME())");

$sql = "SELECT LAST_INSERT_ID() AS last_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>LAST_INSERT_ID() Example</h1>
<p>Last Inserted ID: <?php echo $row['last_id']; ?></p>

<?php

// Delete temp user
$conn->query("DELETE FROM records WHERE id = ".$row['last_id']);
$conn->close();
?>
