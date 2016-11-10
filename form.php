<h1>LOGIN</h1>
<form class="loginform" action="loginin.php" method="post">
  Username:
    <br>
  <input type="text" name="username" value="" required>
    <br>
  Password:
    <br>
  <input type="password" name="password" value="" required>
    <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
    <br>
<div class="resetpass">
  <form class="resetpass1" action="reset.php" method="post">
    <input type="submit" name="reset" value="Reset Password">
  </form>
</div>
  <br><br><br>
  <!-- need to figure out css to make use of padding and spacing this out better -->
<div class="accountsignup">
<p>No Account?</p>
<form class="signup" action="signup.php" method="post">
  <input type="submit" name="signup" value="Signup">
</form>
</div>
<a href="profile.php">Profile Tab</a>
