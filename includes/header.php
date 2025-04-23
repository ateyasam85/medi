<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Herbal Clinic</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
  <script src="assets/js/hero-slider.js"></script>
  <script src="assets/js/scroll-animate.js"></script>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/custom.css">

  <style>
  .animate-fade-in-up {
    animation: fadeInUp 1s ease-out forwards;
  }
  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(40px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .card-3d {
    transition: transform 0.4s, box-shadow 0.4s;
  }
  .card-3d:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0, 128, 0, 0.3);
  }
</style>
</head>
<body class="bg-gray-100 text-gray-800 m-0 p-0">


<!-- Sidebar/Menu -->
<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="md:ml-50 flex justify-center items-center min-h-screen px-4 relative"> <!-- Added 'relative' to allow absolute positioning inside -->
  
    <main class="min-h-screen w-full max-w-7xl p-6 bg-white rounded-lg shadow-2xl transform hover:scale-105 transition-all duration-300 ease-in-out">
        <!-- Your main content goes here -->
  