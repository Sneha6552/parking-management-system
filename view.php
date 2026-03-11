<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Parked Vehicles</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h2 style="text-align:center;">Parked Vehicles</h2>

<?php
$result = mysqli_query($conn,"SELECT * FROM vehicles WHERE exit_time IS NULL");
$count = mysqli_num_rows($result);
?>

<h3 style="text-align:center;">Total Parked Vehicles: <?php echo $count; ?></h3>

<table class="vehicle-table">

<tr>
<th>Parking ID</th>
<th>Vehicle Number</th>
<th>Owner</th>
<th>Type</th>
<th>Slot</th>
<th>Entry Time</th>
<th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<tr>
<td><?php echo $row['parking_id']; ?></td>
<td><?php echo $row['vehicle_number']; ?></td>
<td><?php echo $row['owner_name']; ?></td>
<td><?php echo $row['vehicle_type']; ?></td>
<td><?php echo $row['parking_slot']; ?></td>
<td><?php echo $row['entry_time']; ?></td>


<td>
<a href="exit_process.php?id=<?php echo $row['id']; ?>">
<button class="red">Exit</button>
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>