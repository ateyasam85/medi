<?php
$products = [
  [
    'name' => 'Detox Tea',
    'image' => 'assets/images/tea.jpg',
    'category' => 'Cleansing',
    'subcategory' => 'Body Detox',
    'description' => 'Helps cleanse the body and improve digestion. Effective against bloating, toxins, and constipation.'
  ],
  [
    'name' => 'Herbal Balm',
    'image' => 'assets/images/balm.jpg',
    'category' => 'Pain Relief',
    'subcategory' => 'Muscle and Joint',
    'description' => 'Relieves joint pain, muscle stiffness, and swelling with natural herbs like eucalyptus and camphor.'
  ],
  [
    'name' => 'Immune Booster',
    'image' => 'assets/images/booster.jpg',
    'category' => 'Immunity',
    'subcategory' => 'Daily Wellness',
    'description' => 'Strengthens your immune system to protect against flu, colds, and other illnesses.'
  ],
  [
    'name' => 'Attraction Spell',
    'image' => 'assets/images/spell_attraction.jpg',
    'category' => 'Witchcraft Spells',
    'subcategory' => 'Love Spells',
    'description' => 'Ignites attraction using powerful ancient rituals. Involves rose petals and red candles.'
  ],
  [
    'name' => 'Sweetheart Elixir',
    'image' => 'assets/images/potion_sweetheart.jpg',
    'category' => 'Portions',
    'subcategory' => 'Love Potions',
    'description' => 'Sweet herbal blend to enhance affection and draw love closer.'
  ],
  [
    'name' => 'Ginger Root',
    'image' => 'assets/images/herb_ginger.jpg',
    'category' => 'Herbs',
    'subcategory' => 'Healing Herbs',
    'description' => 'A potent herb for treating nausea, inflammation, and digestive problems.'
  ],
  [
    'name' => 'Neem Cleanse',
    'image' => 'assets/images/herb_neem.jpg',
    'category' => 'Natural Herbs',
    'subcategory' => 'Detox Herbs',
    'description' => 'Naturally detoxifies the body, clears the skin, and improves immunity.'
  ],
  // Add more like: Evil Eye Shield, Business Growth Spell, Lavender Bliss, Passion Draught, etc.
];

$search = strtolower($_GET['search'] ?? '');
$filter = $_GET['category'] ?? '';

// Apply Filtering Logic
$filteredProducts = [];

$search = strtolower($_GET['search'] ?? '');
$filter = $_GET['category'] ?? '';

foreach ($products as $product) {
    $matchesCategory = !$filter || 
        (isset($product['category']) && $product['category'] === $filter) || 
        (isset($product['subcategory']) && $product['subcategory'] === $filter);

    $matchesSearch = !$search || 
        (stripos($product['name'], $search) !== false || 
         stripos($product['description'], $search) !== false);

    if ($matchesCategory && $matchesSearch) {
        $filteredProducts[] = $product;
    }
}

?>

<div class="flex flex-col md:flex-row max-w-7xl mx-auto py-10 px-4">

  <!-- Sidebar -->
<aside class="md:w-1/4 w-full mb-6 md:mb-0 md:mr-8 bg-gradient-to-r from-purple-700 via-purple-600 to-purple-500 p-6 rounded-lg shadow-xl transform transition-all hover:scale-105">
  <div class="bg-black p-3 rounded-lg shadow-md w-full">
    <h2 class="text-xl font-bold mb-4 text-purple-800">
      <a href="index.php?page=product" class="hover:text-purple-300">Product Categories</a>
    </h2>
  </div>

  <div class="space-y-4">
    <!-- Cleansing -->
    <details class="group">
      <summary class="cursor-pointer font-semibold text-white hover:text-purple-300 transition duration-300">Cleansing</summary>
      <ul class="ml-4 mt-2 text-sm text-gray-200 space-y-1">
        <li><a href="index.php?page=product&category=Body Detox" class="hover:text-purple-300">Body Detox</a></li>
      </ul>
    </details>

    <!-- Pain Relief -->
    <details class="group">
      <summary class="cursor-pointer font-semibold text-white hover:text-purple-300 transition duration-300">Pain Relief</summary>
      <ul class="ml-4 mt-2 text-sm text-gray-200 space-y-1">
        <li><a href="index.php?page=product&category=Muscle and Joint" class="hover:text-purple-300">Muscle & Joint</a></li>
      </ul>
    </details>

    <!-- Immunity -->
    <details class="group">
      <summary class="cursor-pointer font-semibold text-white hover:text-purple-300 transition duration-300">Immunity</summary>
      <ul class="ml-4 mt-2 text-sm text-gray-200 space-y-1">
        <li><a href="index.php?page=product&category=Daily Wellness" class="hover:text-purple-300">Daily Wellness</a></li>
      </ul>
    </details>

    <!-- Witchcraft Spells -->
    <details class="group">
      <summary class="cursor-pointer font-semibold text-white hover:text-purple-300">Witchcraft Spells</summary>
      <ul class="ml-4 mt-2 text-sm text-gray-200 space-y-1">
        <li><a href="index.php?page=product&category=Love Spells" class="hover:text-purple-300">Love Spells</a></li>
        <li><a href="index.php?page=product&category=Protection Spells" class="hover:text-purple-300">Protection Spells</a></li>
        <li><a href="index.php?page=product&category=Wealth Spells" class="hover:text-purple-300">Wealth Spells</a></li>
      </ul>
    </details>

    <!-- Potions -->
    <details class="group">
      <summary class="cursor-pointer font-semibold text-white hover:text-purple-300">Potions</summary>
      <ul class="ml-4 mt-2 text-sm text-gray-200 space-y-1">
        <li><a href="index.php?page=product&category=Love Potions" class="hover:text-purple-300">Love Potions</a></li>
      </ul>
    </details>

    <!-- Herbs -->
    <details class="group">
      <summary class="cursor-pointer font-semibold text-white hover:text-purple-300">Herbs</summary>
      <ul class="ml-4 mt-2 text-sm text-gray-200 space-y-1">
        <li><a href="index.php?page=product&category=Healing Herbs" class="hover:text-purple-300">Healing Herbs</a></li>
      </ul>
    </details>

    <!-- Natural Herbs -->
    <details class="group">
      <summary class="cursor-pointer font-semibold text-white hover:text-purple-300">Natural Herbs</summary>
      <ul class="ml-4 mt-2 text-sm text-gray-200 space-y-1">
        <li><a href="index.php?page=product&category=Detox Herbs" class="hover:text-purple-300">Detox Herbs</a></li>
      </ul>
    </details>
    <!-- add more groups -->
  </div>
</aside>



 <!-- Main Content -->
<main class="md:w-3/4 w-full">
  <!-- Search -->
  <form method="GET" action="index.php" class="mb-6">
    <input type="hidden" name="page" value="product">
    <input id="searchInput" type="text" name="search" value="<?= htmlspecialchars($search ?? '') ?>" placeholder="Search products..." class="w-full p-4 border border-purple-300 rounded-lg shadow-md focus:outline-none focus:ring-4 focus:ring-purple-200 transition-all duration-300" />
  </form>

  <!-- Products Grid -->
  <div id="productGrid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php foreach ($filteredProducts as $product): ?>
      <div class="product-card bg-gradient-to-br from-white via-purple-50 to-purple-100 p-5 rounded-2xl shadow-lg transform transition-transform duration-300 hover:-translate-y-3 hover:rotate-1 hover:shadow-2xl border border-purple-200">
        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="w-full h-44 object-cover rounded-lg shadow-md mb-4 transition-transform duration-300 hover:scale-105">
        <h3 class="text-xl font-bold text-purple-900 mb-1"><?= htmlspecialchars($product['name']) ?></h3>
        <p class="text-sm text-gray-700 mb-4"><?= substr($product['description'], 0, 80) ?>...</p>
        <a href="index.php?page=product_profile&product=<?= urlencode($product['name']) ?>" class="inline-block bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow hover:bg-purple-700 transition-colors duration-300">View Product</a>
      </div>
    <?php endforeach; ?>
  </div>
</main>


</div>
