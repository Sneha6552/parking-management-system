
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
<title>Vehicle Entry</title>
<link rel="stylesheet" href="style.css">
</head>

<body class="entry-page">

<div class="entry-container">

<h2>Vehicle Entry</h2>
<p>Register a new vehicle</p>

<form action="entry_process.php" method="POST">

<input type="text" name="vehicle_number" placeholder="Vehicle Number" required>

<input type="text" name="owner_name" placeholder="Owner Name" required>

<select name="vehicle_type">
<option>Two Wheeler</option>
<option>Four Wheeler</option>
</select>

<input type="text" name="parking_slot" placeholder="Parking Slot" required>

<button type="submit" class="green">Register Entry</button>

</form>

</div>

</body>
</html>