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
    'subcategory' => 'Muscle & Joint',
    'description' => 'Relieves joint pain, muscle stiffness, and swelling with natural herbs like eucalyptus and camphor.'
  ],
  [
    'name' => 'Immune Booster',
    'image' => 'assets/images/booster.jpg',
    'category' => 'Immunity',
    'subcategory' => 'Daily Wellness',
    'description' => 'Strengthens your immune system to protect against flu, colds, and other illnesses.'
  ],
];

$search = strtolower($_GET['search'] ?? '');
$filter = $_GET['category'] ?? '';
?>

<div class="flex flex-col md:flex-row max-w-7xl mx-auto py-10 px-4">

  <!-- Sidebar -->
<aside class="md:w-1/4 w-full mb-6 md:mb-0 md:mr-8 bg-gradient-to-r from-purple-700 via-purple-600 to-purple-500 p-6 rounded-lg shadow-xl transform transition-all hover:scale-105">
<div class="bg-black p-3 rounded-lg shadow-md w-full">
  <h2 class="text-xl font-bold mb-4 text-purple-800">Product Categories</h2>
</div>

  <div class="space-y-4">
    <details class="group">
      <summary class="cursor-pointer font-semibold text-white hover:text-purple-300 transition duration-300">Cleansing</summary>
      <ul class="ml-4 mt-2 text-sm text-gray-200 space-y-1">
        <li><a href="index.php?page=product&category=Body Detox" class="hover:text-purple-300">Body Detox</a></li>
      </ul>
    </details>
    <details class="group">
      <summary class="cursor-pointer font-semibold text-white hover:text-purple-300 transition duration-300">Pain Relief</summary>
      <ul class="ml-4 mt-2 text-sm text-gray-200 space-y-1">
        <li><a href="index.php?page=product&category=Muscle & Joint" class="hover:text-purple-300">Muscle & Joint</a></li>
      </ul>
    </details>
    <details class="group">
      <summary class="cursor-pointer font-semibold text-white hover:text-purple-300 transition duration-300">Immunity</summary>
      <ul class="ml-4 mt-2 text-sm text-gray-200 space-y-1">
        <li><a href="index.php?page=product&category=Daily Wellness" class="hover:text-purple-300">Daily Wellness</a></li>
      </ul>
    </details>
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
    <?php foreach ($products as $product):
      $matchSearch = $search ? (
        stripos($product['name'], $search) !== false || 
        stripos($product['description'], $search) !== false
      ) : true;
      $matchCategory = $filter ? $product['subcategory'] === $filter : true;
      if ($matchSearch && $matchCategory):
    ?>
      <div class="product-card bg-gradient-to-br from-white via-purple-50 to-purple-100 p-5 rounded-2xl shadow-lg transform transition-transform duration-300 hover:-translate-y-3 hover:rotate-1 hover:shadow-2xl border border-purple-200">
        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="w-full h-44 object-cover rounded-lg shadow-md mb-4 transition-transform duration-300 hover:scale-105">
        <h3 class="text-xl font-bold text-purple-900 mb-1"><?= htmlspecialchars($product['name']) ?></h3>
        <p class="text-sm text-gray-700 mb-4"><?= substr($product['description'], 0, 80) ?>...</p>
        <a href="index.php?page=product_profile&product=<?= urlencode($product['name']) ?>" class="inline-block bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow hover:bg-purple-700 transition-colors duration-300">View Product</a>
      </div>
    <?php endif; endforeach; ?>
  </div>
</main>


</div>
