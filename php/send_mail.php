<?php
if ($_GET['mail'] == 'request') {
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_phone = $_POST['contact_phone'];
    $contact_subject = $_POST['contact_subject'];
    $contact_message = $_POST['contact_message'];

    $to = "saadey7@gmail.com"; // Replace with your personal email
    $subject = "New Contact Form Submission: " . $contact_subject;
    $headers = "From: " . $contact_email . "\r\n";
    $headers .= "Reply-To: " . $contact_email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body>
        <p><strong>Name:</strong> $contact_name</p>
        <p><strong>Email:</strong> $contact_email</p>
        <p><strong>Phone:</strong> $contact_phone</p>
        <p><strong>Message:</strong><br>$contact_message</p>
    </body>
    </html>";

    if (mail($to, $subject, $message, $headers)) {
        echo true;
    } else {
        echo "An error occurred while sending the email.";
    }
}
?>