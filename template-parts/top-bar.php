<header class="bg-main text-white top-0 z-10 sticky">
  <div class="max-w-[1500px] mx-auto flex justify-between items-center py-6 px-4">
    <a href="/index.php">
      <h1 class="font-manrope font-bold text-2xl">Recruit.</h1>
    </a>
    <div class="relative w-10">
      <img src="<?php echo get_template_directory_uri() . "/assets/img/menu-close.svg" ?>" alt="menu-logo"
        id="menu-icon" class="object-cover cursor-pointer fill-white" />
    </div>
  </div>
  <?php get_template_part('/template-parts/nav-bar') ?>
</header>