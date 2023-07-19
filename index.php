<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gain_Launcher</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.5/scrollreveal.min.js"></script>

  <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="animated-background">
  <header>

        <h1>Gain_Launcher</h1>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="demo.php">Demo Login</a></li>
            <li><a href="#" onclick="toggleModal()">Login</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </header>

      
      <main>
        <section class="banner">
            <h2>Welcome To<br>
                Gain Launcher Platform.</h2>
            <img src="https://i.ibb.co/HB09r75/Gain-lover.png">
            </section>
            
</div>
</main>
<div class="animated-background1">
<div class="container">
  <div class="box"><h3>HELLO! <br>
  Just Join And Start Earning <br>
  RS 1000 - 2000 / DAY</h3></div>
 </div>

 <div class="heading">
  <h1>RUN BY</h1>
 </div>
 <div class="container2">
  
  <div class="box1">
    <img src="https://i.ibb.co/VmJWR0N/Untitled-design-1.png">
    <h3>SAURAV KUMAR</h3>
  </div>
 </div>
 
</div>
<style>
  
</style>

  <footer>
    &copy; 2023 Gain_Launcher. All rights reserved.
  </footer>
  <script src="js/script.js"></script>


  <!-------RSGISTRATION AND LOGIN FORM-->
  <div id="modal" class="modal">
    <div class="modal-content">
      <div class="container5">
      <h2>Registration Form</h2>
      <form method="post" action="register.php" enctype="multipart/form-data">
      <span class="close" onclick="toggleModal()">&times;</span>
      <form id="registration-form" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
        <label for="profile-pic">Profile Picture:</label>
        <input type="file" id="profilePicPath" name="profile-pic" accept="image/*" required>
      </div>
        <div class="form-group">
          <input type="submit" value="Register">
        </div>
      </form>
      </form>
    </div>



    <div class="container5">
      <h2>Login Here</h2>
        <form method="POST" action="login.php">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        
        <div class="form-group">
          <input type="submit" value="Login">
          
        </div>
      </form>
  
    </div>


<style>
  
</style>
<script src="js/script.js">
  // Function to display and hide the pop-up form
  
</script>
</body>
</html>

