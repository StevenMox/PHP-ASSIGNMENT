<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/script.js"></script>
<?php include 'header.php'; ?>
<h1>SIGN-UP</h1>
<form class="signupform"  action="loginpage.php" method="post" onsubmit="return validateForm()">
  User Name:
  <input id="uname" type="text" name="uname" value="" required>
  <br>
  First Name:
  <input id="fname" type="text" name="fname" value="" required>
  <br>
  Last Name:
  <input id="lname" type="text" name="lname" value="" required>
  <br>
  D.O.B:
  <input id="date" type="date" name="date" value="" required>
  <br>
  Email:
  <input id="email"type="email" name="email" value="" required>
  <br>
  Location:
  <input id="location"type="text" name="location" value="">
  <br>
  Password:
  <input id="password" type="password" name="Password" value="" required>
  <br>
  Password Confirm:
  <input id="passwordcon" type="password" name="Passwordcon" value="" required>
  <br><br>
  <input type="reset" name="reset" value="Clear">
  <input type="submit" name="submit" value="Submit">
</form>
<a href="profile.php">Profile Tab</a>
<?php include 'footer.php'; ?>
