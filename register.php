<?php
// register.php

// Connect to DB
$host = "localhost";
$user = "root";
$password = "FLOzzy@10"; // Use your MySQL password
$db = "auchi_poly";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$matric_number = $_POST['matric_number'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$state = $_POST['state'];
$phone = $_POST['phone_number'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$department = $_POST['departmet'];
$next_kin = $_POST['next_kin'];
$mode = $_POST['mode'];

// Insert data
$sql = "INSERT INTO students 
(first_name, last_name, matric_number, address, dob, state, phone_number, email, sex, department, next_kin, mode) 
VALUES 
('$first_name', '$last_name', '$matric_number', '$address', '$dob', '$state', '$phone', '$email', '$sex', '$department', '$next_kin', '$mode')";

if ($conn->query($sql) === TRUE) {
  echo "Registration successful!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
