<?php include 'includes/metas.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/tabs.php'; ?>

<div class="container">

<h1>SIGN-UP</h1>

<form class="signupform"  action="loginpage.php" method="post">
  <label for="text" class="sr-only">User Name:</label>
  <input id="uname" type="text" name="uname" value="" required placeholder="Username">
  <br>
  <label for="text" class="sr-only">First Name:</label>
  <input id="fname" type="text" name="fname" value="" required placeholder="First Name">
  <br>
  <label for="text" class="sr-only">Last Name:</label>
  <input id="lname" type="text" name="lname" value="" required placeholder="Last Name">
  <br>
  <label for="date" class="sr-only">D.O.B:</label>
  <input id="date" type="date" name="date" value="" required>
  <br>
  <label for="email" class="sr-only">Email:</label>
  <input id="email"type="email" name="email" value="" required placeholder="Email">
  <br>
  <label for="text" class="sr-only">Location:</label>
  <input id="location"type="text" name="location" value="" placeholder="Location">
  <br>
  <label for="password" class="sr-only">Password:</label>
  <input id="password" type="password" name="Password" value="" required placeholder="Password">
  <br>
  <label for="password" class="sr-only">Password Confirm:</label>
  <input id="passwordcon" type="password" name="Passwordcon" value="" required placeholder="Password Confirm">
  <br><br>
  <button class="btn btn-sm btn-primary" type="reset">Reset</button>
  <button class="btn btn-sm btn-primary" type="submit">Submit</button>
</form>

</div>
<?php include 'includes/footer.php'; ?>
