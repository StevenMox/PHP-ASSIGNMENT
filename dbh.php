<?php

$conn = mysqli_connect("localhost", "root", "", "f6team14_6ixspotsdb" );

if(!$conn)
{
  die("Connection failed : ".mysqli_connect_error());
}
