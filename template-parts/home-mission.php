<?php $mission = get_field('mission') ?>

<div class="flex flex-col lg:flex-row max-h-[45vh]">
  <div class="flex-1 flex flex-col justify-center p-10 xl:px-36">
    <p class="uppercase text-secondary font-bold tracking-wider mb-2">misson</p>
    <h2 class="text-2xl lg:text-4xl mb-4"><?php echo $mission['title'] ?></h2>
    <p class="font-light"><?php echo $mission['content'] ?></p>
  </div>
  <div class="relative lg:max-w-[50vw] overflow-hidden">
    <img src="<?php echo $mission['image'] ?>" alt="misson-image" class="object-cover w-full h-full">
  </div>
</div>