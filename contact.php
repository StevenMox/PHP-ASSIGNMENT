<?php include 'includes/metas.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/tabs.php'; ?>

<div class="container">

<h1>CONTACT US</h1><br>

<form class="contact" action="contactus.php" method="post">
  <label for="text" class="sr-only">Username:</label>
  <input type="text" name="username" value="" required placeholder="Username">
    <br><br>
  <label for="email" class="sr-only">Email:</label>
  <input type="email" name="email" value="" required placeholder="Email">
    <br><br>
  <label for="textarea" class="sr-only">Message:</label>
  <textarea style="overflow:auto;resize:none;" type="textarea" name="message" value="" rows="7" cols="30" required placeholder="Message Box"></textarea>
    <br><br>
  <button class="btn btn-sm btn-primary" type="reset">Reset</button>
  <button class="btn btn-sm btn-primary" type="submit">Submit</button>
</form>

</div>
<?php include 'includes/footer.php'; ?>

<!-- <script src="js/hide.js"></script> -->

<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
