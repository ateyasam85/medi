<?php


include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
ini_set('display_errors', 0);
error_reporting(0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/../logs/php-error.log'); // Adjust path as needed

$page = $_GET['page'] ?? 'home';
$allowed_pages = ['home', 'shop', 'about', 'contact', 'product', 'product_profile'];





if (in_array($page, $allowed_pages)) {
    include "pages/{$page}.php";
} else {
    echo "<h2>Page not found</h2>";
}

include('includes/footer.php');
?>
