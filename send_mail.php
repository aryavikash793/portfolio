<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your_email@gmail.com'; 
        $mail->Password   = "your_app_password";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('your_email@gmail.com', 'Portfolio Contact Form');
        $mail->addAddress('aryavikash793@gmail.com'); 

        $mail->isHTML(true); // Enable HTML email
        $mail->Subject = "New Message from Portfolio Contact Form - $name";

        $mail->Body = "
            <h2 style='color: #333;'>Message Received ✉️</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Message:</strong>
            {$message}</p>
            <hr>
            <p style='font-size: 12px; color: #666;'>This message was sent from your portfolio contact form.</p>
        ";

        $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message"; // Fallback for non-HTML clients

        $mail->send();
        http_response_code(200);
        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
}
