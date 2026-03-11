<?php
include 'db.php';

$vehicle = $_POST['vehicle_number'];
$owner = $_POST['owner_name'];
$type = $_POST['vehicle_type'];
$slot = $_POST['parking_slot'];

$pid = "P".rand(1000,9999);

mysqli_query($conn,"INSERT INTO vehicles
(parking_id,vehicle_number,owner_name,vehicle_type,parking_slot,entry_time)
VALUES
('$pid','$vehicle','$owner','$type','$slot',NOW())");

header("location:view.php");
?>