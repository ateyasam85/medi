<section class="text-center py-16 bg-white animate-fade-in-up opacity-0 transition-opacity duration-1000" id="welcome-section">
  <div class="max-w-2xl mx-auto px-4">
    <h2 class="text-4xl md:text-5xl font-bold text-green-800 mb-4">Welcome to Herbal Clinic</h2>
    <p class="text-lg md:text-xl text-gray-700 mb-6 leading-relaxed">
      Discover natural healing with our trusted herbal products designed to restore balance and promote wellness.
    </p>
    <a href="index.php?page=about" class="inline-block bg-green-700 text-white px-6 py-3 rounded-full shadow-md hover:bg-green-600 transition duration-300">
      Learn More
    </a>
  </div>
</section>


<!-- HERO SECTION WITH SLIDER -->
<section class="relative h-[80vh] w-full overflow-hidden text-white">
  <!-- Slider Container -->
  <div id="hero-slider" class="absolute inset-0 w-full h-full z-0">
    <div class="slide bg-cover bg-center w-full h-full absolute transition-opacity duration-1000 opacity-100" style="background-image: url('assets/images/hero-herbal.jpg');"></div>
    <div class="slide bg-cover bg-center w-full h-full absolute transition-opacity duration-1000 opacity-0" style="background-image: url('assets/images/hero-herbal2.jpg');"></div>
    <div class="slide bg-cover bg-center w-full h-full absolute transition-opacity duration-1000 opacity-0" style="background-image: url('assets/images/hero-herbal3.jpg');"></div>
    <div class="slide bg-cover bg-center w-full h-full absolute transition-opacity duration-1000 opacity-0" style="background-image: url('assets/images/hero-herbal4.jpg');"></div>

  </div>

  <!-- Overlay -->
  <div class="absolute inset-0 bg-green-900 bg-opacity-50 z-10"></div>

  <!-- Content -->
  <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-4">
    <h1 class="text-4xl md:text-6xl font-bold mb-4">Natural Healing Starts Here</h1>
    <p class="text-xl md:text-2xl mb-6">Herbal solutions that work with your body, not against it.</p>
    <a href="index.php?page=shop" class="bg-white text-green-800 px-6 py-3 rounded shadow-lg hover:bg-green-100 font-semibold transition duration-300 ease-in-out">
      Shop Now
    </a>
  </div>
</section>


<!-- FEATURED PRODUCTS -->
<section class="py-16 bg-gray-100">
  <h2 class="text-3xl font-bold text-center mb-10">Featured Products</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 max-w-7xl mx-auto">
    <?php
    $products = [
      ['name' => 'Detox Tea', 'image' => 'assets/images/tea.jpg', 'price' => 1500],
      ['name' => 'Herbal Balm', 'image' => 'assets/images/balm.jpg', 'price' => 1000],
      ['name' => 'Immune Booster', 'image' => 'assets/images/booster.jpg', 'price' => 1800],
    ];
    foreach ($products as $product):
    ?>
    <div class="bg-white rounded-lg shadow-xl p-4 hover:shadow-2xl transition duration-300 ease-in-out text-center">
      <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="w-full max-h-48 object-cover object-center rounded mb-4 mx-auto">
      <h3 class="text-xl font-semibold mb-2"><?= $product['name'] ?></h3>
      <p class="text-green-700 font-bold mb-3">Ksh <?= number_format($product['price']) ?></p>
      <a href="index.php?page=product&id=<?= urlencode($product['name']) ?>" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300 ease-in-out">View Product</a>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ABOUT HERBAL DOCTOR -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-10">
    <div class="md:w-1/2 flex justify-center">
      <img src="assets/images/doctor.jpg" alt="Herbal Doctor" class="rounded-lg shadow-2xl w-full max-w-md object-cover mx-auto md:mx-0">
    </div>
    <div class="md:w-1/2 text-center md:text-left">
      <h2 class="text-3xl font-bold mb-4">Meet the Herbal Doctor</h2>
      <p class="text-gray-700 mb-4">
        With over 15 years of experience in natural medicine, our doctor blends traditional herbal knowledge with modern research to help people heal naturally.
      </p>
      <p class="text-gray-700">
        From treating chronic pain to boosting immunity, our solutions are organic, tested, and trusted by thousands.
      </p>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="bg-green-50 py-16">
  <h2 class="text-3xl font-bold text-center mb-10">What Our Clients Say</h2>
  <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-lg shadow-xl text-center">
      <p class="italic mb-4">"The detox tea helped me sleep better and feel energized. I love it!"</p>
      <h4 class="font-semibold">– Lydia, Nairobi</h4>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-xl text-center">
      <p class="italic mb-4">"Herbal balm cured my joint pain in weeks. Amazing product!"</p>
      <h4 class="font-semibold">– Peter, Kisumu</h4>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-xl text-center">
      <p class="italic mb-4">"Highly recommend the immune booster. Haven’t had a cold in months."</p>
      <h4 class="font-semibold">– Brenda, Mombasa</h4>
    </div>
  </div>
</section>

<!-- NEWSLETTER -->
<section class="py-16 bg-green-700 text-white text-center">
  <h2 class="text-3xl font-bold mb-4">Stay Updated</h2>
  <p class="mb-6">Get herbal health tips, special offers & new product updates in your inbox.</p>
  <form action="#" method="post" class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
    <input type="email" name="email" placeholder="Enter your email" required class="w-full p-3 rounded text-gray-900">
    <button type="submit" class="bg-white text-green-700 px-6 py-3 rounded hover:bg-gray-200 font-semibold transition duration-300 ease-in-out">Subscribe</button>
  </form>
</section>
