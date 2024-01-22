
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set the recipient email address
  $to = "neha156@gmail.com";

  // Set the subject of the email
  $subject = "New Contact Form Submission";

  // Build the email message
  $emailMessage = "Name: $name\n";
  $emailMessage .= "Email: $email\n";
  $emailMessage .= "Message:\n$message";

  // Set additional headers if needed
  $headers = "From: $email\r\n";

  // Send the email
  mail($to, $subject, $emailMessage, $headers);

  // Optionally, you can redirect the user to a thank you page
  header("Location: thank-you.html");
  exit;
}
?>
