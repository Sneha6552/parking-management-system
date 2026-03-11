<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Parking History</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Parking History</h2>

<table class="vehicle-table">

<tr>
<th>Parking ID</th>
<th>Vehicle Number</th>
<th>Owner</th>
<th>Entry Time</th>
<th>Exit Time</th>
<th>Fee</th>
</tr>

<?php

$result = mysqli_query($conn,"SELECT * FROM vehicles WHERE exit_time IS NOT NULL");

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['parking_id']; ?></td>
<td><?php echo $row['vehicle_number']; ?></td>
<td><?php echo $row['owner_name']; ?></td>
<td><?php echo $row['entry_time']; ?></td>
<td><?php echo $row['exit_time']; ?></td>
<td>₹<?php echo $row['fee']; ?></td>

</tr>

<?php
}
?>

</table>

<br>

<center>
<a href="index.php">
<button class="blue">Back to Home</button>
</a>
</center>

</body>
</html>