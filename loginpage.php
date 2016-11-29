<?php

include 'dbh.php';

$username = $_POST['uname'];
$first = $_POST['fname'];
$last = $_POST['lname'];
$dob = $_POST['date'];
$email = $_POST['email'];
$location = $_POST['location'];
$password = $_POST['Password'];
$passwordcon = $_POST['Passwordcon'];

$sql ="INSERT INTO profile (uname, fname, lname, date, email, location, Password, Passwordcon )
 VALUES ('$uname', '$first', '$last', '$dob', '$email', '$location', '$password', '$passwordcon')";

$result = $conn->query($sql);

header("Location: index.php");

 ?>
