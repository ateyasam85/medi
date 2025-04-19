<?php
$page = $_GET['page'] ?? 'home';
$allowed_pages = ['home', 'shop', 'about', 'contact', 'product'];

include('includes/navbar.php');
include('includes/sidebar.php');
include 'includes/header.php';

if (in_array($page, $allowed_pages)) {
  include "pages/$page.php";
} else {
  echo "<h2>Page not found</h2>";
}

include 'includes/footer.php';

