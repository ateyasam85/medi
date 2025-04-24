<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$success = false;
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $mail = new PHPMailer(true);
    try {
        // Step 1: Enable 2-Step Verification
        // Visit: https://myaccount.google.com/security
        // Under "Signing in to Google", enable 2-Step Verification

//         Step 2: Generate a Gmail App Password
// After enabling 2-Step Verification, go to:
// 👉 https://myaccount.google.com/apppasswords

// Under "Select App" choose Mail
// Under "Select Device" choose Other → Type: Website Contact Form

// Click Generate – you’ll get a 16-character password (e.g. abcd efgh ijkl mnop)

// Use that password in your PHP code:

        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'samsonmario85@gmail.com'; // Replace with your Gmail
        $mail->Password   = 'styg psmp jhbc bvcg';   // Use App Password from Google
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('samsonmario85@gmail.com'); // Your email to receive the form

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Message from website contact';
        $mail->Body    = "<strong>Name:</strong> $name <br><strong>Email:</strong> $email <br><strong>Message:</strong><br> $message";

        $mail->send();
        $success = true;
    } catch (Exception $e) {
        $errorMsg = "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!-- CONTACT HERO -->
<section class="relative bg-gradient-to-br from-purple-500 via-white to-green-300 py-20 text-center">
  <div class="max-w-4xl mx-auto px-6">
    <h1 class="text-5xl font-extrabold text-green-800 mb-4" data-aos="fade-down">Get in <span class="text-purple-600">Touch</span></h1>
    <p class="text-gray-700 text-lg" data-aos="fade-up" data-aos-delay="100">
      <b>Reach out for consultations, inquiries, or just to connect with us!</b>
    </p>
  </div>
</section>

<!-- CONTACT FORM & INFO -->
<section class="py-20 bg-black">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">
    
    <!-- Contact Form -->
    <form method="POST" action="" class="bg-green-300 p-8 rounded-xl shadow-xl" data-aos="fade-right">
      <h2 class="text-2xl font-bold text-green-800 mb-6">Send a Message</h2>

      <?php if ($success): ?>
        <div class="mb-4 p-4 bg-green-200 border border-green-400 text-green-800 rounded-lg">
            ✅ Your message has been sent successfully!
        </div>
      <?php elseif ($errorMsg): ?>
        <div class="mb-4 p-4 bg-red-200 border border-red-400 text-red-800 rounded-lg">
            ❌ Error sending message: <?= $errorMsg ?>
        </div>
      <?php endif; ?>


      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-purple-600 focus:border-purple-600" required>
      </div>
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-purple-600 focus:border-purple-600" required>
      </div>
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Message</label>
        <textarea name="message" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-purple-600 focus:border-purple-600" rows="5" required></textarea>
      </div>
      <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-full font-semibold transition duration-300">
        Send Message
      </button>
    </form>

    <!-- Contact Info -->
    <div data-aos="fade-left">
      <h2 class="text-2xl font-bold text-green-800 mb-6">Contact Information</h2>
      <div class="space-y-4 text-gray-200">
        <div class="flex items-start gap-4">
          <i class="fas fa-map-marker-alt text-purple-600 mt-1"></i>
          <p>Kenya</p>
        </div>
        <div class="flex items-start gap-4">
          <i class="fas fa-phone text-purple-600 mt-1"></i>
          <p>+254 700 000 000</p>
        </div>
        <div class="flex items-start gap-4">
          <i class="fas fa-envelope text-purple-600 mt-1"></i>
          <p>daktariramadhan91@gmail.com</p>
        </div>
      </div>

      <!-- Social Media -->
      <div class="mt-8">
        <h3 class="text-lg font-semibold text-green-700 mb-2">Follow Us</h3>
        <div class="flex gap-4 text-purple-600 text-2xl">
          <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f hover:text-green-800"></i></a>
          <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter hover:text-green-800"></i></a>
          <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram hover:text-green-800"></i></a>
          <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube hover:text-green-800"></i></a>
          <a href="https://wa.me/254700123456" target="_blank"><i class="fab fa-whatsapp hover:text-green-800"></i></a>
        </div>
      </div>
    </div>

  </div>
</section>


