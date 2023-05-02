<section class="relative overflow-hidden text-white min-h-[25vh] flex justify-center flex-col">
  <div class="max-w-[1500px] w-full mx-auto px-4">
    <h1 class="text-3xl md:text-5xl uppercase leading-[1.1em] text-center lg:text-left">
      <?php the_title() ?>
    </h1>
  </div>
  <img src="<?php echo get_template_directory_uri() . "/assets/img/hero-image.jpeg" ?>" class="absolute top-0 object-cover w-full h-full -z-10" alt="">
</section>