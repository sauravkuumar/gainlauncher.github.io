</div>

<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: login.html");
  exit();
}

// Get the username from the session
$username = $_SESSION["username"];

// Get the profile picture path from the database
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

// Retrieve the profile picture path for the logged-in user
$sql = "SELECT profilePicPath FROM gain WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $profilePicPath = $row["profilePicPath"];
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
  <script src="js/dashboard.js">
    </script>

<body>
<div class="sidebar">
<a href="#" class="closebtn" onclick="closeNav()">&times;</a>
    
    <a href="#">Dashboard</a>
    <a href="#">My Courses</a>
    <a href="#">Affliate Account</a>
    <a href="#">Guide Video</a>
    <a href="#">Profile</a>
    <a href="#">My Refferal</a>
    <a href="#">My Earning</a>
    <a href="logout.php" class="logout">Logout</a>
  </div>

  <div id="main">
    
    <button class="openbtn" onclick="openNav()">&#9776; <div class="heading"><h1>Gain_Launcher</h1></div>  </button>  
      <div class="container">
      <h2><?php echo $_SESSION['username']; ?> <br>ACCOUNT BALANCE <br> ₹1000</h2></h2>
        <div class="profile-pic">
        <img src="profile_pictures/1687156641536.jpeg">
        <img src="./profile_pictures/<?php echo $data['profilePicPath']; ?>"> 
        </div>
      </div>
  <div class="boxes">
  <div class="custom-box">
    <h2>Box 1</h2>
    <p>This is box 1.</p>
  </div>
  <div class="custom-box">
    <h2>Box 2</h2>
    <p>This is box 2.</p>
  </div>
  <div class="custom-box">
    <h2>Box 3</h2>
    <p>This is box 3.</p>
  </div>
  <div class="custom-box">
    <h2>Box 4</h2>
    <p>This is box 4.</p>
  </div>
  <div class="custom-box">
    <h2>Box 5</h2>
    <p>This is box 5.</p>
  </div>
  </div>

   

</body>
</html>
