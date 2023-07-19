<?php
// Start session
session_start();

// Database connection
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "codetodream";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate the username and password
  $sql = "SELECT * FROM gain WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Login successful
    $_SESSION["username"] = $username;
    header("Location: dashboard.php");
    exit();
  } else {
    // Login failed
    echo "Invalid username or password!";
  }
}

// Close the database connection
$conn->close();
?>
