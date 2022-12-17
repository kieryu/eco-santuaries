<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Eco Sanctuaries El Nido</title>
  <link rel="stylesheet" href="assets/libraries/slick/slick/slick.css">
  <link rel="stylesheet" href="assets/libraries/slick/slick/slick-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
  <link rel="stylesheet" href="assets/libraries/hamburgers.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/tailwind.css">
  <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
</head>

<?php 
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  // print $actual_link;
?>

<body>
  <header
    class="site-header flex sm:justify-between sm:items-center inner py-6 absolute z-20 left-0 right-0 space-x-0 lg:space-x-4">
    <button class="hamburger hamburger--collapse" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <h1 class="font-celiasMedium text-white site-title !m-auto lg:!m-0"><a href="index.php">Eco Sanctuaries El
        Nido</a></h1>
    <nav class="space-x-0 lg:space-x-4 xl:space-x-10">
      <a href="index.php" class="block lg:hidden disabled:pointer-events-none">
        <img src="assets/images/logo.svg" class="w-28 h-auto mb-10 mx-auto xl:mx-0">
      </a>
      <a href="index.php" class="font-celiasMedium text-white hidden lg:inline active">Home</a>
      <a href="our-story.php" class="font-celiasMedium text-white">Our Story</a>
      <a href="accomodation.php" class="font-celiasMedium text-white">Accomodation</a>
      <a href="experiences.php" class="font-celiasMedium text-white">Experiences</a>
      <a href="advocacies.php" class="font-celiasMedium text-white">Advocacies</a>
      <a href="#" class="font-celiasMedium text-white inline lg:hidden">Contact Us</a>
      <div class="flex flex-row items-center space-x-6 mt-32 absolute bottom-[10%] lg:hidden">
        <a href="#" class="w-4">
          <img src="assets/images/social-medias/fb.png" class="w-4 h-auto">
        </a>
        <a href="#" class="w-8">
          <img src="assets/images/social-medias/twitter.png" class="w-8 h-auto">
        </a>
        <a href="#" class="w-7">
          <img src="assets/images/social-medias/ig.png" class="w-7 h-auto">
        </a>
        <a href="#" class="w-7">
          <img src="assets/images/social-medias/yt.png" class="w-7 h-auto">
        </a>
      </div>
    </nav>
  </header>