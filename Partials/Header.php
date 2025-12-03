<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DigitalWave Solutions - Contact</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
  <header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4">
      <h1 class="text-2xl font-bold text-blue-600">DigitalWave</h1>
      <ul class="flex space-x-6">
        <li><a href="index.php?page=home" class="<?php  if($page === "home") echo "text-blue-600"?> hover:text-blue-600">Accueil</a></li>
        <li><a href="index.php?page=services" class=" <?php  if($page === "services") echo "text-blue-600"?> hover:text-blue-600">Services</a></li>
        <li><a href="index.php?page=about" class=" <?php  if($page === "about") echo "text-blue-600"?> hover:text-blue-600">À propos</a></li>
        <li><a href="index.php?page=contact" class="<?php  if($page === "contact") echo "text-blue-600"?> hover:text-blue-600 ">Contact</a></li>
      </ul>
    </nav>
  </header>