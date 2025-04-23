<?php
$allProducts = [
  'Detox Tea' => [
    'image' => '/assets/images/tea.jpg',
    'description' => 'This Detox Tea helps cleanse your digestive system and eliminate harmful toxins, using natural herbs like ginger, mint, and dandelion.'
  ],
  'Herbal Balm' => [
    'image' => '/assets/images/balm.jpg',
    'description' => 'Formulated with eucalyptus, camphor, and menthol, this balm relieves muscle stiffness, soreness, and joint aches effectively.'
  ],
  'Immune Booster' => [
    'image' => '/assets/images/booster.jpg',
    'description' => 'A powerful blend of echinacea, elderberry, and zinc designed to strengthen your immune system and keep illnesses away.'
  ],
];

$productName = $_GET['product'] ?? '';
$product = $allProducts[$productName] ?? null;

if (!$product):
  echo "<p class='text-center text-red-600 mt-20'>Product not found.</p>";
  return;
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($productName) ?> - Herbal Product Details</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/animation.css"> <!-- Add animation styles -->
</head>
<body class="bg-gradient-to-br from-purple-50 via-white to-purple-100 text-gray-800">

<div class="max-w-4xl mx-auto mt-16 bg-yellow p-8 rounded-xl shadow-2xl transform transition-all duration-500 hover:scale-[1.01]">
  <div class="flex flex-col md:flex-row gap-10 items-center">
    <div class="w-full md:w-1/2 perspective">
      <div class="relative w-full h-64 rounded-lg shadow-lg transform-style-3d hover:rotate-y-6 transition duration-500 overflow-hidden">
        <img src="<?= htmlspecialchars($product['image']) ?>" class="w-full h-full object-cover rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out" alt="<?= htmlspecialchars($productName) ?>">
      </div>
    </div>
    <div class="md:w-1/2">
      <h2 class="text-3xl font-extrabold text-purple-700 mb-4"><?= htmlspecialchars($productName) ?></h2>
      <p class="text-lg text-gray-700 leading-relaxed mb-6"><?= htmlspecialchars($product['description']) ?></p>
      <a href="index.php?page=product" class="inline-block px-5 py-2 bg-purple-700 text-white font-semibold rounded hover:bg-purple-800 transition">&larr; Back to Products</a>
    </div>
  </div>
</div>

</body>
</html>
