<?php $mission = get_field('mission') ?>

<div class="flex flex-col lg:flex-row max-h-[45vh]">
  <div class="flex-1 flex flex-col justify-center p-10 xl:px-36">
    <p class="small-title">misson</p>
    <h2 class="text-2xl lg:text-4xl mb-4 lg:max-w-[800px]"><?php echo $mission['title'] ?></h2>
    <p class="font-light lg:max-w-[800px]"><?php echo $mission['content'] ?></p>
    <?php echo custom_link("about") ?>
  </div>
  <div class="relative lg:max-w-[50vw] overflow-hidden">
    <img src="<?php echo $mission['image'] ?>" alt="misson-image"
      class="object-cover w-full h-full hover:scale-105 transition-all duration-500">
  </div>
</div>