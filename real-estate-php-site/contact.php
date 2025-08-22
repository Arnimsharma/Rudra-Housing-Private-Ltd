<?php
require_once __DIR__ . '/includes/functions.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer manually (no Composer needed)
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

$errors = [];
$success = false;

// Get property info from GET or POST
$propertyId = $_POST['property_id'] ?? $_GET['property_id'] ?? 'Not specified';
$propertyTitle = $_POST['property_title'] ?? $_GET['property_title'] ?? 'Not specified';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    if ($name === '' || $email === '' || $phone === '' || $message === '') {
        $errors[] = "All fields are required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (!$errors) {
        // Save contact in JSON
        $contactData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'property_id' => $propertyId,
            'property_title' => $propertyTitle
        ];
        save_contact($contactData);

        // Send email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'arnimsharma090@gmail.com'; // Sender Gmail
            $mail->Password = 'bhyu ewrt ctbh vuwc'; // App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('arnimsharma090@gmail.com', 'Rudra Housing Website');
            $mail->addAddress('arnimsharma90@gmail.com', 'Admin');

            $mail->isHTML(true);
            $mail->Subject = "New Property Inquiry from $name";
            $mail->Body = "
                <h2>New Property Inquiry</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Message:</strong><br>$message</p>
                <p><strong>Property:</strong> $propertyTitle (#$propertyId)</p>
            ";

            $mail->send();
            $success = true;
        } catch (Exception $e) {
            $errors[] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Rudraa Housing India</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .container.contact-page { max-width: 800px; margin: 40px auto; padding: 0 16px; }
        .contact-page h1 { font-size: 28px; margin-bottom: 20px; text-align: center; }

        .contact-card { background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .contact-card label { display: block; margin-bottom: 6px; font-weight: 600; color: #333; }
        .contact-card input[type="text"],
        .contact-card input[type="email"],
        .contact-card textarea {
            width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px; margin-bottom: 18px;
            font-size: 15px; transition: border-color .3s ease; color: #1f2937; /* text-gray-800 */
        }
        .contact-card input::placeholder,
        .contact-card textarea::placeholder { color: #6b7280; /* placeholder-gray-500 */ }
        .contact-card input:focus, .contact-card textarea:focus { border-color: #0066cc; outline: none; }
        .contact-card textarea { resize: vertical; min-height: 120px; }

        .contact-card .btn { display: inline-block; background: #0066cc; color: #fff; font-weight: 600; padding: 12px 25px;
            border: none; border-radius: 8px; cursor: pointer; transition: background .3s ease; }
        .contact-card .btn:hover { background: #004c99; }

        /* Alerts */
        .alert { margin: 0 0 20px; padding: 15px; border-radius: 8px; font-size: 15px; }
        .alert.success { border-left: 4px solid #28a745; background: #e9f9ef; color: #1f7a36; }
        .alert.error { border-left: 4px solid #cc0000; background: #ffecec; color: #a30000; }

        /* Popup */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .popup { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 50; }
        .popup-content { background: white; max-width: 400px; margin: 100px auto; padding: 24px; border-radius: 12px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.2); }
        .popup-content h2 { font-size: 24px; font-weight: bold; color: #1f2937; margin-bottom: 16px; }
        .popup-content p { color: #4b5563; margin-bottom: 16px; }
        .popup.show { display: flex; align-items: center; justify-content: center; }
        .animate-fadeInUp { animation: fadeInUp 0.5s ease-out forwards; }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100">
    <?php include __DIR__ . '/includes/header.php'; ?>

    <div class="container contact-page">
        <h1>Contact Us About This Property</h1>

        <?php if ($success): ?>
            <div id="thank-you-popup" class="popup show">
                <div class="popup-content animate-fadeInUp">
                    <h2>Thank You!</h2>
                    <p>Your inquiry has been received. We’ll get back to you soon.</p>
                    <p>Redirecting back to the property page...</p>
                </div>
            </div>
            <script>
                setTimeout(() => {
                    window.location.href = 'property.php?id=<?php echo urlencode($propertyId); ?>';
                }, 3000); // Redirect after 3 seconds
            </script>
        <?php else: ?>
            <?php if ($errors): ?>
                <div class="alert error"><?php echo implode(' • ', array_map('htmlspecialchars', $errors)); ?></div>
            <?php endif; ?>

            <form class="contact-card" method="post" action="">
                <input type="hidden" name="property_id" value="<?php echo htmlspecialchars($propertyId); ?>">
                <input type="hidden" name="property_title" value="<?php echo htmlspecialchars($propertyTitle); ?>">

                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <label for="phone">Phone:</label>
                <input type="text" name="phone" required>

                <label for="message">Message:</label>
                <textarea name="message" required></textarea>

                <button type="submit" class="btn">Send Inquiry</button>
            </form>
        <?php endif; ?>
    </div>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>