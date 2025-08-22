<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer/src/SMTP.php';

$contact_errors = [];
$contact_success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $property_title = $_POST['property_title'] ?? 'General Inquiry';
    $property_id = $_POST['property_id'] ?? null;

    if ($name === '' || $email === '' || $phone === '' || $message === '') {
        $contact_errors[] = "All fields are required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $contact_errors[] = "Invalid email address.";
    }

    if (!$contact_errors) {
        $contactData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'property_id' => $property_id,
            'property_title' => $property_title
        ];
        save_contact($contactData);

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'arnimsharma090@gmail.com';
            $mail->Password = 'bhyu ewrt ctbh vuwc';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('arnimsharma090@gmail.com', 'Rudra Housing Website');
            $mail->addAddress('arnimsharma90@gmail.com', 'Admin');

            $mail->isHTML(true);
            $mail->Subject = "New Inquiry from $name";
            $mail->Body = "
                <h2>New Inquiry</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Message:</strong> $message</p>
                <p><strong>Property:</strong> $property_title" . ($property_id ? " (#$property_id)" : "") . "</p>
            ";

            $mail->send();
            $contact_success = true;
        } catch (Exception $e) {
            $contact_errors[] = "Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>

<div class="fixed bottom-5 right-5 z-50 w-80 bg-white shadow-xl rounded-xl p-6">
    <h2 class="text-xl font-bold mb-4 text-indigo-600">Contact Us</h2>

    <?php if ($contact_success): ?>
        <div class="bg-green-100 text-green-800 p-3 rounded mb-3">✅ Message sent successfully!</div>
    <?php endif; ?>
    <?php if ($contact_errors): ?>
        <div class="bg-red-100 text-red-800 p-3 rounded mb-3"><?php echo implode('<br>', array_map('htmlspecialchars', $contact_errors)); ?></div>
    <?php endif; ?>

    <form method="post" class="space-y-3">
        <input type="hidden" name="property_id" value="<?php echo $property_id ?? ''; ?>">
        <input type="hidden" name="property_title" value="<?php echo htmlspecialchars($property_title ?? ''); ?>">

        <input type="text" name="name" placeholder="Your Name" required class="w-full p-2 border rounded">
        <input type="email" name="email" placeholder="Your Email" required class="w-full p-2 border rounded">
        <input type="text" name="phone" placeholder="Your Phone" required class="w-full p-2 border rounded">
        <textarea name="message" placeholder="Your Message" required class="w-full p-2 border rounded"></textarea>

        <button type="submit" name="contact_submit" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">Send</button>
    </form>
</div>
