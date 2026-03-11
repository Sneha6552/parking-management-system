<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM vehicles WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

$entry = strtotime($row['entry_time']);
$exit = time();

$hours = max(1,ceil(($exit - $entry) / 3600));
$fee = $hours * 10;   // ₹10 per hour

mysqli_query($conn,"UPDATE vehicles 
SET exit_time = NOW(), fee='$fee' 
WHERE id='$id'");

header("Location:view.php");
?>