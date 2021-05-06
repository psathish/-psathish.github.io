<?php
  if(isset($_POST['submit'])){
    $to = "sathish@qgol.in"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
