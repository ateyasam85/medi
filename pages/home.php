<!-- WELCOME SECTION -->
<section class="text-center py-16 bg-gradient-to-br from-green-100 via-white to-green-50 animate-fade-in-up opacity-0 transition-opacity duration-1000" id="welcome-section">
  <div class="max-w-2xl mx-auto px-4">
    <h2 class="text-5xl font-extrabold text-green-800 drop-shadow-md mb-4">Welcome to Daktari Ramadhan Juma</h2>
    <p class="text-xl text-gray-700 mb-6 leading-relaxed font-medium">
      <b class="text-green-900">The most reliable African traditional witch doctor.</b>
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
  <div class="absolute inset-0 bg-green-900 bg-opacity-60 z-10"></div>
  <div class="relative z-20 flex flex-col items-center justify-center h-full text-center px-4">
    <h1 class="text-4xl md:text-6xl font-extrabold text-white drop-shadow-lg mb-4">Ancient Wisdom, Powerful Healing</h1>
    <p class="text-xl md:text-2xl mb-6 max-w-3xl">
      Experience the mystical touch of African traditional healing with Daktari Ramadhan Juma.
    </p>
  </div>
</section>

<!-- FEATURED PRODUCTS -->
<section class="py-16 bg-gradient-to-tr from-gray-100 via-white to-green-50">
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
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-10">
    <div class="md:w-1/2 flex justify-center">
      <img src="assets/images/doctor.jpg" alt="Herbal Doctor" class="rounded-3xl shadow-2xl w-full max-w-md object-cover mx-auto md:mx-0">
    </div>
    <div class="md:w-1/2 text-center md:text-left">
      <h2 class="text-3xl font-bold mb-4 text-green-900">Meet Daktari Ramadhan Juma Daudi</h2>
      <p class="text-gray-700 mb-4 leading-relaxed">
        With over 20 years of experience in spiritual healing and traditional medicine, our renowned doctor combines ancient Zanzibar rituals with Kenyan herbal wisdom.
      </p>
      <p class="text-gray-700 leading-relaxed">
        From restoring balance in life to resolving personal and health challenges, his methods are rooted in tradition, tested by time, and trusted by thousands.
      </p>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="bg-green-50 py-16">
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

<!-- NEWSLETTER -->
<section class="py-16 bg-green-700 text-white text-center">
  <h2 class="text-3xl font-bold mb-4">Stay Connected with Daktari Ramadhan Juma</h2>
  <p class="mb-6">Receive exclusive insights on African traditional healing, spiritual guidance, and herbal remedies directly in your inbox.</p>
  <form action="#" method="post" class="max-w-md mx-auto flex flex-col sm:flex-row gap-4">
    <input type="email" name="email" placeholder="Enter your email" required class="w-full p-3 rounded text-gray-900 shadow-inner">
    <button type="submit" class="bg-white text-green-700 px-6 py-3 rounded shadow hover:bg-gray-200 font-semibold transition duration-300 transform hover:scale-105">Subscribe</button>
  </form>
</section>