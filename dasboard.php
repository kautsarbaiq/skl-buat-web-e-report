<?php
session_start();
if (isset($_POST["logout"])) {
  session_unset();
  session_destroy();
  header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <h1>Selamat datang<?= $_SESSION["username"] ?></h1>

  <form action="dasboard.php" method="POST">
    <button type="submit" name="logout">log outtttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt</button>
  </form>

  <?php include "layout/navbar.html" ?>




</body>




<!-- Scrip -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="./node_modules/preline/dist/preline.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="main.js"></script>
<script src="./node_modules/preline/dist/preline.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>





</body>

</html>