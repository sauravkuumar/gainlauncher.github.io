<?php
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
    $email = $_POST["email"];
    $password = $_POST["password"];
  
    // Process profile picture upload
    $profilePicDir = "profile_pictures/"; // Directory to store the uploaded profile pictures
    $profilePicPath = $profilePicDir . $_FILES["profile-pic"]["name"]; // Path of the uploaded profile picture
    move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $profilePicPath); // Move the uploaded file to the destination directory
  
    // Insert the user into the database
    $sql = "INSERT INTO gain (username, email, password, profilePicPath) VALUES ('$username', '$email', '$password', '$profilePicPath')";
    
    if ($conn->query($sql) === TRUE) {
      // Registration successful
      echo "Registration successful!";
    } else {
      // Registration failed
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

// Close the database connection
$conn->close();
?>
