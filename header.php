<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('title') ?></title>
  <?php wp_head() ?>
</head>

<body class="flex flex-col min-h-screen">


  <?php get_template_part('template-parts/top-bar') ?>


  <main class="flex-1">