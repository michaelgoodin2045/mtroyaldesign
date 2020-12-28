<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'michael@michaelgoodin.net';

    $email_subject = "New form submission";

    $email_body = "User First Name: $fname.\n".
                    "User Last Name: $lname.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
    
    $to = "michaelgoodin@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html")

?>