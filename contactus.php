<?php
if(isset($_POST['submit'])){
    $to = "real6ixspots@gmail.com";
    $from = $_POST['email'];
    $username = $_POST['username'];
    $subject = "Form submission";
    $message = $username . " " . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    echo "Email Sent. Thank you " . $username . ", we will get back to you as soon as possible.";

    mail($to,$subject,$message,$headers);
    }
?>
<?php header("refresh: 2; url= contact.php"); ?>

<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
