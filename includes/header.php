<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ramadhan</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- AOS Animation Library -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
  <script src="../assets/js/hero-slider.js"></script>
  <script src="../assets/js/scroll-animate.js"></script>
 

  <link rel="stylesheet" href="../assets/css/animations.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/custom.css">

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
    box-shadow: 0 20px 40px rgba(128, 0, 128, 0.3);
  }
</style>
</head>
<body class="text-gray-800 custom-bg">


<!-- Sidebar/Menu -->
<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="md:ml-50 flex justify-center items-center min-h-screen px-4 relative"> <!-- Added 'relative' to allow absolute positioning inside -->
  
    <main class="main-neon min-h-screen w-full max-w-7xl p-6 bg-black rounded-lg shadow-2xl transform hover:scale-105 transition-all duration-300 ease-in-out">




       <!-- main content  -->
  