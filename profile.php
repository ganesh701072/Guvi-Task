<?php
// Start the session (assuming it has already been started)
session_start();

// Get the user's ID from the session (assuming it was stored there during login)
$user_id = $_SESSION['user_id'];

// Connect to the database (replace the placeholders with your actual database credentials)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the user's profile details from the database
$sql = "SELECT age, dob, email, phone, address FROM users WHERE id = $user_id";
$result = $conn->query($sql);

// Check for errors
if ($conn->error) {
  die("Error: " . $conn->error);
}

// Display the user's profile details
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $age = $row['age'];
  $dob = $row['dob'];
  $email = $row['email'];
  $phone = $row['phone'];
  $address = $row['address'];

  echo "<p>Age: $age</p>";
  echo "<p>Date of Birth: $dob</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Phone: $phone</p>";
  echo "<p>Address: $address</p>";
} else {
  echo "No profile found for this user.";
}

// Close the database connection
$conn->close();
?>
