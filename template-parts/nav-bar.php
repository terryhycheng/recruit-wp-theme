<nav id="navbar" class="absolute top-0 bg-secondary text-main w-full hide">
  <div class="max-w-[1500px] mx-auto">
    <div class="flex flex-col items-end lg:py-6 lg:px-4 p-4">
      <div class="relative w-10">
        <img src="<?php echo get_template_directory_uri() . "/assets/img/menu-open.svg" ?>" alt="menu-logo" id="menu-icon-open" class="object-cover cursor-pointer fill-main">
      </div>
    </div>
    <?php wp_nav_menu(array(
      'container_class' => 'main_nav',
      'items_wrap' => '<ul class="p-10 pt-4 lg:pb-24 lg:pt-12 lg:text-3xl font-bold font-archivo text-2xl uppercase flex flex-col gap-4 lg:gap-6">%3$s</ul>',
    )) ?>
  </div>
</nav>