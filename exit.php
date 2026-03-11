<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Vehicle Exit</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="entry-page">

<div class="entry-container">

<h2>Vehicle Exit</h2>
<p>Search and exit vehicle</p>

<form method="GET">

<input type="text" name="search" placeholder="Enter Vehicle Number">

<button type="submit" class="blue">Search</button>

</form>

<br>

<table border="1" width="100%">

<tr>
<th>Parking ID</th>
<th>Vehicle Number</th>
<th>Owner</th>
<th>Slot</th>
<th>Action</th>
</tr>

<?php

if(isset($_GET['search'])){

$search = $_GET['search'];

$result = mysqli_query($conn,
"SELECT * FROM vehicles 
WHERE vehicle_number='$search' AND exit_time IS NULL");

while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['parking_id']; ?></td>
<td><?php echo $row['vehicle_number']; ?></td>
<td><?php echo $row['owner_name']; ?></td>
<td><?php echo $row['parking_slot']; ?></td>

<td>
<a href="exit_process.php?id=<?php echo $row['id']; ?>">
<button class="red">Exit Vehicle</button>
</a>
</td>

</tr>

<?php
}
}
?>

</table>

</div>

</body>
</html>