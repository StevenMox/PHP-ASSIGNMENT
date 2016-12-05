<?php include 'includes/metas.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/tabs.php'; ?>
<?php include 'dbh.php'; ?>

<?php
  ini_set('mysql.connect_timeout',300);
  ini_set('default_socket_timeout',300);
 ?>

<h1>STREET SPOTS</h1>
<div class="container">
  <form class="streetspots" action="streetspots.php" method="post" enctype="multipart/form-data" style="text-align:center;">
    <input type="hidden" name="size" value="1000000">
      <div class="imageload" style="margin-left:35%;">
        <input type="file" name="image">
      </div>
      <div class="locationtext">
        <input type="text" name="text" placeholder="Upload Location">
      </div>
      <div class="submitbutton">
        <input type="submit" name="upload" value="Upload">
      </div>
  </form>

  <?php
    if (isset($_POST['upload']))
    {
      if (getimagesize($_FILES['image']['tmp_name']) == FALSE)
      {
        echo "Please select and image";
      }
      else
      {
          $image = addslashes($_FILES['image']['tmp_name']);
          $name = addslashes($_FILES['image']['name']);
          $image = file_get_contents($image);
          $image = base64_encode($image);
          saveimage($name,$image);
      }
    }

    function saveimage($name,$image)
    {
      $con = mysql_connect("gblearn.com","f6team14","800168283");
      mysql_select_db("f6team14_6ixspotsdb", $con);
      var_dump($con);
      $qry="insert into Skateparks (name,image) values ('$name')('$image')";
      $result = mysql_query($qry , $con);

      if($result)
      {
        echo "<br> Image Uploaded";
      }
      else
      {
        echo "<br> Image Not Uploaded";
      }
    }
   ?>
</div>
<?php include 'includes/footer.php'; ?>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
