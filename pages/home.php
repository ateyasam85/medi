
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>
<!-- WELCOME SECTION -->
<section class="text-center py-16 bg-gradient-to-br from-purple-500 via-white to-green-300 animate-fade-in-up opacity-0 transition-opacity duration-1000" id="welcome-section">
  <div class="max-w-2xl mx-auto px-4">
    <h2 class="text-5xl font-extrabold text-black-800 drop-shadow-md mb-4">Welcome to Daktari Ramadhan Juma</h2>
    <p class="text-xl text-gray-700 mb-6 leading-relaxed font-medium">
      <b class="text-blue-900">The most reliable African traditional witch doctor.</b>
    </p>
    <a href="index.php?page=about" class="inline-block bg-green-700 text-white px-6 py-3 rounded-full shadow-lg hover:bg-green-600 transition duration-300 transform hover:scale-105">
      Learn More
    </a>
  </div>
</section>

<!-- HERO SECTION -->
<section class="relative h-[80vh] w-full overflow-hidden text-white">
  <div id="hero-slider" class="absolute inset-0 w-full h-full z-0">
    <div class="slide bg-cover bg-center w-full h-full absolute transition-opacity duration-1000 opacity-100" style="background-image: url('assets/images/hero-herbal.jpg');"></div>
    <div class="slide bg-cover bg-center w-full h-full absolute transition-opacity duration-1000 opacity-0" style="background-image: url('assets/images/hero-herbal2.jpg');"></div>
    <div class="slide bg-cover bg-center w-full h-full absolute transition-opacity duration-1000 opacity-0" style="background-image: url('assets/images/hero-herbal3.jpg');"></div>
    <div class="slide bg-cover bg-center w-full h-full absolute transition-opacity duration-1000 opacity-0" style="background-image: url('assets/images/hero-herbal4.jpg');"></div>
  </div>
  <div class="absolute inset-0 bg-purple-900 bg-opacity-30 z-10"></div>
  <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-4">
    <h1 class="text-4xl md:text-6xl font-extrabold text-white drop-shadow-lg mb-4">Ancient Spells, Powerful Portions</h1>
    <p class="text-xl md:text-2xl mb-6 max-w-3xl">
      Experience the mystical touch of African traditional spells and portions with Daktari Ramadhan Juma.
    </p>
  </div>
</section>

<!-- ADVERT SLIDER SECTION -->
<section class="py-10 bg-black">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-6 text-purple-800">Adverts</h2>
    
    <div class="relative w-full overflow-hidden rounded-xl shadow-xl h-64 border-4 border-purple-600 ring-4 ring-purple-400 ring-opacity-50">
      <div id="advertSlider" class="flex w-[400%] h-full transition-transform duration-700 ease-in-out">
        <div class="w-full flex-shrink-0">
          <img src="assets/images/bg.jpg" alt="Ad 1" class="w-full h-full object-cover">
        </div>
        <div class="w-full flex-shrink-0">
          <img src="assets/images/doctor.jpg" alt="Ad 2" class="w-full h-full object-cover">
        </div>
        <div class="w-full flex-shrink-0">
          <img src="assets/images/hero-herbal.jpg" alt="Ad 3" class="w-full h-full object-cover">
        </div>
        <div class="w-full flex-shrink-0">
          <img src="assets/images/hero-herbal2.jpg" alt="Ad 4" class="w-full h-full object-cover">
        </div>
      </div>
    </div>
  </div>
</section>




<!-- FEATURED PRODUCTS -->
<section class="py-16 bg-gradient-to-tr from-green-400 via-white to-purple-400">
  <h2 class="text-3xl font-bold text-center mb-10 text-green-800 drop-shadow-md">🌿 Featured Products</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 max-w-7xl mx-auto">
    <?php
    $products = [
      ['name' => 'Detox Tea', 'image' => 'assets/images/tea.jpg'],
      ['name' => 'Herbal Balm', 'image' => 'assets/images/balm.jpg'],
      ['name' => 'Immune Booster', 'image' => 'assets/images/booster.jpg'],
    ];
    foreach ($products as $product):
    ?>
    <div class="bg-white rounded-2xl shadow-lg p-4 text-center card-3d">
      <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="w-full max-h-48 object-cover object-center rounded-xl mb-4 mx-auto">
      <h3 class="text-xl font-semibold text-green-800"><?= htmlspecialchars($product['name']) ?></h3>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="text-center mt-12">
    <a href="index.php?page=product" class="inline-block bg-green-700 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-green-600 shadow-lg transition duration-300 transform hover:scale-105">
      View All Products
    </a>
  </div>
</section>

<!-- ABOUT SECTION -->
<section class="py-16 bg-black-800">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-10">
    <div class="md:w-1/2 flex justify-center">
      <img src="assets/images/doctor.jpg" alt="Herbal Doctor" class="rounded-3xl shadow-2xl w-full max-w-md object-cover mx-auto md:mx-0">
    </div>
    <div class="md:w-1/2 text-center md:text-left">
      <h2 class="text-3xl font-bold mb-4 text-purple-900">Meet Daktari Ramadhan Juma Daudi</h2>
      <p class="text-gray-100 mb-4 leading-relaxed">
        With over 20 years of experience in spiritual healing and traditional medicine, our renowned doctor combines ancient Zanzibar rituals with Kenyan herbal wisdom.
      </p>
      <p class="text-gray-100 leading-relaxed">
        From restoring balance in life to resolving personal and health challenges, his methods are rooted in tradition, tested by time, and trusted by thousands.
      </p>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="bg-purple-100 py-16">
  <h2 class="text-3xl font-bold text-center mb-10 text-green-800">What Our Clients Say</h2>
  <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-xl shadow-lg text-center card-3d">
      <p class="italic text-gray-700 mb-4">"Daktari Ramadhan Juma's spiritual guidance helped me overcome personal obstacles."</p>
      <h4 class="font-semibold text-green-700">– Amina, Nairobi</h4>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-lg text-center card-3d">
      <p class="italic text-gray-700 mb-4">"His herbal remedies worked wonders for my chronic pain."</p>
      <h4 class="font-semibold text-green-700">– Joseph, Kisumu</h4>
    </div>
    <div class="bg-white p-6 rounded-xl shadow-lg text-center card-3d">
      <p class="italic text-gray-700 mb-4">"The traditional healing methods completely transformed my life."</p>
      <h4 class="font-semibold text-green-700">– Nzalio, Zanzibar</h4>
    </div>
  </div>
</section>
<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$subscribe_success = false;
$subscribe_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['subscribe'])) {
  $subscriberEmail = htmlspecialchars($_POST['email']);

  $mail = new PHPMailer(true);
  try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'samsonmario85@gmail.com'; // ✅ use your Gmail
    $mail->Password   = 'gjfu tvey jgeb vqxi';   // ✅ use Gmail app password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('samsonmario85@gmail.com', 'Website Subscription');
    $mail->addAddress('samsonmario85@gmail.com'); // where you receive the subscriber email

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Subscriber! From website.';
    $mail->Body    = "You have a new subscriber: <strong>{$subscriberEmail}</strong>";

    $mail->send();
    $subscribe_success = true;
  } catch (Exception $e) {
    $subscribe_error = "❌ Subscription failed: {$mail->ErrorInfo}";
  }
}
?>
<!-- NEWSLETTER -->
<section class="py-16 bg-gradient-to-r from-black via-purple-600 to-black text-white text-center">
  <h2 class="text-3xl font-bold mb-4">Stay Connected with Daktari Ramadhan Juma</h2>
  <p class="mb-6">Receive exclusive insights on African traditional healing, spiritual guidance, and herbal remedies directly in your inbox.</p>
  <?php if ($subscribe_success): ?>
  <div class="bg-green-100 text-green-800 p-3 rounded mb-4 text-center">✅ Thank you for subscribing!</div>
<?php elseif ($subscribe_error): ?>
  <div class="bg-red-100 text-red-800 p-3 rounded mb-4 text-center"><?php echo $subscribe_error; ?></div>
<?php endif; ?>

  <form action="" method="post" class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
    <input type="email" name="email" placeholder="Enter your email" required class="w-full p-3 rounded text-gray-900 shadow-inner">
    <button type="submit" name="subscribe" class="bg-white text-green-700 px-6 py-3 rounded shadow hover:bg-gray-200 font-semibold transition duration-300 transform hover:scale-105">
  Subscribe
</button>

  </form>
  <!-- Social Media -->
  <div class="mt-8">
    <h3 class="text-lg font-semibold text-black mb-4">Follow Daktari Ramadhan Juma</h3>
    <div class="flex justify-center gap-6 text-white text-3xl">
      <a href="https://facebook.com" target="_blank" class="hover:text-purple-500"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com" target="_blank" class="hover:text-purple-500"><i class="fab fa-twitter"></i></a>
      <a href="https://instagram.com" target="_blank" class="hover:text-purple-500"><i class="fab fa-instagram"></i></a>
      <a href="https://youtube.com" target="_blank" class="hover:text-purple-500"><i class="fab fa-youtube"></i></a>
      <a href="https://wa.me/254700123456" target="_blank" class="hover:text-purple-500"><i class="fab fa-whatsapp"></i></a>
    </div>
  </div>
</section>

<script src="../assets/js/scroll-animate.js"></script>
