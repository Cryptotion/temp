<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['mail'];
    $mobile = $_POST['mobile'];
    $businessName = $_POST['businessName'];
    $businessCategory = $_POST['businessCategory'];
    $businessStructure = $_POST['businessStructure'];
    $industrySector = $_POST['industrySector'];

    $to = "sonigoutam53@gmail.com"; // Change this to your email address
    $subject = "New Appointment Request";
    
    $message = "Full Name: $fullName\n";
    $message .= "Email: $email\n";
    $message .= "Mobile: $mobile\n";
    $message .= "Business Name: $businessName\n";
    $message .= "Business Category: $businessCategory\n";
    $message .= "Business Structure: $businessStructure\n";
    $message .= "Industry Sector: $industrySector\n";

    $headers = "From: " . $email;

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>
