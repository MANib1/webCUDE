<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST {
  $name = $_POST['name'];    $email = $_POST[''];
  $message = $_POST[''];

  if (!empty($name) && !empty($email) && !empty($message)) {
      $to = 'mmaharjan699@gmail.com';
      $subject = 'New Message from ' . $name;
      $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
      $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();

      if (mail($to, $subject, $body, $headers)) {
          echo 'Your message has been sent successfully.';
      } else {
          echo 'There was a problem sending your message. Please try again later.';
      }
  } else {
      echo 'Please fill out all fields before submitting.';
  }
} else {
  echo 'Invalid request method.';
}
?>