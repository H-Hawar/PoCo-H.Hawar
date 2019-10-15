<?php 

if (isset($_POST['submit'])) {
    # code...
    // echo "IT WORKS";
    $to = "hasan.hawar@powercoders.org";
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $txt = $_POST['message'];
    $headers = "From: {}" .$email . "\r\n".
    "CC: somebodyelse@example.com";

    mail($to, $subject, $message, $headers);
     
    headers("Location: contact.html");
}


?>