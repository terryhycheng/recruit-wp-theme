<?php $ceo = get_field('ceo') ?>

<section class="max-w-[1500px] mx-auto flex flex-col-reverse lg:flex-row gap-10 my-20 justify-between px-4">
  <div class="lg:w-1/2 flex flex-col justify-center">
    <p class="small-title">message from ceo</p>
    <h2 class="mb-6 lg:mb-10 mt-4 text-3xl lg:text-5xl"><?php echo $ceo['tagline'] ?></h2>
    <div class="prose max-w-full text-sm lg:text-base"><?php echo $ceo['message'] ?></div>
  </div>
  <div class="flex flex-col items-center">
    <div class="relative h-full w-full lg:max-w-[400px] max-h-[40vh] overflow-hidden">
      <img src="<?php echo $ceo['profile_picture'] ?>" alt="ceo-profile-picture" class="object-cover h-full w-full transition-all hover:scale-105 duration-300">
    </div>
    <div class="text-center lg:text-right">
      <p class="text-lg mt-4 font-archivo"><?php echo $ceo['full_name'] ?></p>
      <p class="uppercase"><?php echo $ceo['title'] ?></p>
    </div>
  </div>
</section>