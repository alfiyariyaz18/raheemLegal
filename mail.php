<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $subject_of_message = $_POST['subject']
    $message = $_POST['message'];

    $email_from = 'info@elawyersfze.com';

    $email_subject = "New Form Submission";
    $email_body = "Client Name: $name.\n".
                    "Client Email: $visitor_email.\n".
                        "Phone Number: $phone_number.\n".
                            "Subject of the Message: $subject_of_message.\n".
                                "Message: $message.\n";
    
    $to = "info@raheemlegal.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index-2.html");

?>