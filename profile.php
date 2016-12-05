<?php include 'includes/metas.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/tabs.php'; ?>

<h1>PROFILE</h1><!-- will actually just be the users name  -->

<div class="container" style="text-align:center;">
  <h1>Username : <?php "uname"; ?></h1>
  <h3>First Name : <?php "fname"; ?></h3>
  <h3>Last Name : <?php "lname"; ?></h3>
  <h3>D.O.B : <?php "date"; ?></h3>
  <h3>Email : <?php "email"; ?></h3>
  <h3>Location : <?php "location"; ?></h3>
</div>

<?php include 'includes/footer.php'; ?>

<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
