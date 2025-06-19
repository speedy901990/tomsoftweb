<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Enable error reporting for debugging
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  // Check if it's a POST request
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    exit('Method not allowed');
  }

  // Get form data
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $subject = $_POST['subject'] ?? '';
  $message = $_POST['message'] ?? '';

  // Validate input
  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    header('HTTP/1.1 400 Bad Request');
    exit('All fields are required');
  }

  try {
    // Include PHPMailer
    require __DIR__ . '/../vendor/autoload.php';

    // Create a new PHPMailer instance
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    // Read credentials from file
    $lines = file("credentials.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (count($lines) == 2) {
        $username = $lines[0];
        $password = $lines[1];
    } else {
        $username = 'notSet';
        $password = 'notSet';
    }

    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('mychaty@gmail.com');
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "
      <html>
      <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$message</p>
      </body>
      </html>
    ";

    // Send email
    $mail->send();
    echo 'OK';
  } catch (Exception $e) {
    error_log("Mail Error: " . $e->getMessage());
    header('HTTP/1.1 500 Internal Server Error');
    echo 'Failed to send email: ' . $e->getMessage();
  }
?>
