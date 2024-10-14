<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $reason = $_POST["reason"];

    // Perform necessary validation and processing
    // You may also want to save data to a database or send an email

    // Sending a simple email for demonstration purposes
    $to = "diarise@gmail.com";
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nReason: $reason";
    mail($to, $subject, $message);

    // Return a response
    echo "success";
} else {
    echo "error";
}
?>
