<?php
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    // Get form values safely
    $name = htmlspecialchars($_POST['name']); 
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Example: Save to database or send emial
    // For now, let's just display back to user
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>We received your message:</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>"
  }  else {
    echo "Invalid request."
}
?>