<?php if (get_field('services')) :
  $services = get_field('services');
endif;

// represents 4 services from ACF
$chars = ["a", "b", "c", "d"]
?>


<div class="bg-bgGray min-h-[50vh] flex flex-col justify-center">
  <div class="max-w-[1500px] mx-auto my-10 px-4">
    <div class="text-center mb-16">
      <p class="small-title">services</p>
      <h2 class="text-3xl"><?php echo $services['tagline'] ?></h2>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
      <?php foreach ($chars as $char) :
        $icon = 'service_' . $char . '_icon';
        $title = 'service_' . $char . '_title';
        $content = 'service_' . $char . '_content';
      ?>
      <div class="bg-white p-8">
        <div class="relative w-16">
          <img src="<?php echo $services[$icon] ?>" class="object-contain" alt="">
        </div>
        <div class="mt-4">
          <h3 class="mb-2 text-xl"><?php echo $services[$title] ?></h3>
          <p><?php echo $services[$content] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>