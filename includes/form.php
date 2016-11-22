<div class="container">

<h1>LOGIN</h1>

<form class="loginform" action="loginin.php" method="post">
  <label for="text" class="sr-only">Username:</label>
    <br>
  <input type="text" name="username" value="" placeholder="Username"required>
    <br>
  <label for="password" class="sr-only">Password:</label>
    <br>
  <input type="password" name="password" value="" placeholder="Password"required>
    <br><br>
  <button class="btn btn-sm btn-primary" type="submit">Sign In</button>
</form>
  <br>

<div class="resetpass">
  <h4>Forgot Your Password?</h4>
  <form class="resetpass1" action="reset.php" method="post">
    <button class="btn btn-sm btn-primary" type="submit">Reset</button>
  </form>
</div>

  <br><br><br>
  <!-- need to figure out css to make use of padding and spacing this out better -->

<div class="accountsignup">
<h4>No Account?</h4>
  <form class="signup" action="signup.php" method="post">
    <button class="btn btn-sm btn-primary" type="submit">Sign Up Now</button>
  </form>
</div>

</div>


<script type="text/javascript">
var divOne = document.getElementById("mySidenav");
divOne.style.visibility = "hidden";
</script>
