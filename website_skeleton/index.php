<?php

// Generate html boilerplate code
// Create <header> and <footer> html elements
// Create about.php
// Move header.php and footer.php in partials folder
// Create variable $companyName which can be accessed in footer.php

//
$companyName = 'TheCodeholic';
?>
<!-- Rename header.php to  show Fatal error-->
<?php require "partials/header.php"; ?>
<!-- Create weather.php in partials-->
<!-- Rename weather.php to show warning-->
<?php include "partials/weather.php" ?>
<h1>Welcome to my cool website</h1>
<?php require "partials/footer.php"; ?>
