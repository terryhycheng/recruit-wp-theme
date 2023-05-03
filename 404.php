<?php get_header() ?>


<section class="relative overflow-hidden text-white h-[90vh] flex justify-center flex-col">
  <div class="max-w-[1500px] w-full mx-auto px-4 flex flex-col items-center lg:items-start text-center lg:text-left">
    <p class="tracking-widest font-thin mb-2">Please make sure the url is correct</p>
    <h1 class="text-4xl md:text-6xl uppercase leading-[1.1em]">
      <span class="text-secondary">404</span>
      not found
    </h1>
    <a href="/" class="w-full max-w-[250px] px-6 py-2 capitalize border border-white flex justify-between items-center mt-10 hover:bg-white hover:text-main transition-all duration-300">
      <p class="text-center flex-1">
        Back to Hompage
      </p>
    </a>
  </div>
  <img src="<?php echo get_template_directory_uri() . "/assets/img/hero-image.jpeg" ?>" class="absolute top-0 object-cover w-full h-full -z-10" alt="">
</section>


<?php get_footer() ?>