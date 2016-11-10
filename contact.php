<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/script.js"></script>
<?php include 'header.php'; ?>
<?php include 'tabs.php'; ?>
<h1>CONTACT US</h1>

<form class="contact" action="contactus.php" method="post">
  Username: <input type="text" name="username" value="" required>
    <br>
  Email: <input type="email" name="email" value="" required>
    <br>
<div class="msgtxt">
  Message:
</div>
<div class="msg-box">
 <textarea style="overflow:auto;resize:none" type="textarea" name="message" value="" rows="7" cols="30" required></textarea>
</div>
    <br><br>
  <input type="reset" name="reset" value="Clear">
  <input type="submit" name="submit" value="Submit">
</form>
<?php include 'footer.php'; ?>
