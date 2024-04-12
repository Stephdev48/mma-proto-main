<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../public/script/script-main.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1 class="text-3xl font-bold underline">
    Test Tailwind :)
    </h1>
    <img src="../public/pictures/cc-assur.jpeg" alt="test-pic"/>
    <script>alertTest();</script>

    <section class="container">

    <!-- Retreiving requested page content -->
    <?= $content ?>

    </section>


<?php
    require 'footer.view.php';
    ?>