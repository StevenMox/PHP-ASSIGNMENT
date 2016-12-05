<?php

$conn = mysqli_connect("gblearn.com", "f6team14", "800168283", "f6team14_6ixspotsdb" );
// $conn = mysqli_connect("localhost","root","","f6team14_6ixspotsdb");

if(!$conn)
{
  die("Connection failed : ".mysqli_connect_error());
}
?>
