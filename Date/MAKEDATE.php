<?php
include "../dbcon.php";

// Example: Create a date for year 2024 and day 45 of the year
$sql = "SELECT id, fullname, MAKEDATE(2024, 45) AS date_from_year_day FROM records LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>MAKEDATE() Example</h1>
<p>Date for 45th day of 2024: <?php echo $row['date_from_year_day']; ?></p>
