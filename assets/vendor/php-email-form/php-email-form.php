<?php
class PHP_Email_Form {
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $ajax;
    public $smtp;
    public $messages = array();

    public function add_message($message, $label = '', $min_length = 0) {
        if (strlen($message) < $min_length) {
            return false;
        }
        $this->messages[] = array(
            'label' => $label,
            'message' => $message
        );
        return true;
    }

    public function send() {
        if (empty($this->to)) {
            return 'No recipient email address specified';
        }

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: " . $this->from_name . " <" . $this->from_email . ">" . "\r\n";

        $email_content = "<html><body>";
        $email_content .= "<h2>New Contact Form Submission</h2>";
        
        foreach ($this->messages as $message) {
            $email_content .= "<p><strong>" . htmlspecialchars($message['label']) . ":</strong><br>";
            $email_content .= nl2br(htmlspecialchars($message['message'])) . "</p>";
        }
        
        $email_content .= "</body></html>";

        if (isset($this->smtp) && !empty($this->smtp)) {
            return $this->send_smtp($email_content);
        } else {
            return mail($this->to, $this->subject, $email_content, $headers);
        }
    }

    private function send_smtp($email_content) {
        require_once 'PHPMailer/PHPMailer.php';
        require_once 'PHPMailer/SMTP.php';
        require_once 'PHPMailer/Exception.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = $this->smtp['host'];
            $mail->SMTPAuth = true;
            $mail->Username = $this->smtp['username'];
            $mail->Password = $this->smtp['password'];
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = $this->smtp['port'];

            $mail->setFrom($this->from_email, $this->from_name);
            $mail->addAddress($this->to);
            $mail->isHTML(true);
            $mail->Subject = $this->subject;
            $mail->Body = $email_content;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
} 