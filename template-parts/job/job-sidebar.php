<?php $types = get_field('job_types') ?>

<aside class="lg:max-w-[400px] flex flex-col gap-6">
  <div class="border p-10">
    <h3 class="text-xl mb-4">Location</h3>
    <p><?php echo get_field('location') ?></p>
    <hr class="my-8">
    <h3 class="text-xl mb-4">Salary</h3>
    <p><?php echo get_field('salary') ?></p>
    <hr class="my-8">
    <h3 class="text-xl mb-4">Job Type</h3>
    <?php foreach ($types as $type) : ?>
      <p class="capitalize"><?php echo $type ?></p>
    <?php endforeach; ?>
  </div>
  <div class="border p-10">
    <h3 class="text-xl mb-4">Job Reference No.</h3>
    <p>#<?php echo get_field('reference') ?></p>
  </div>
  <a href="javascript:history.back()" class="mt-8 hidden lg:block">
    <div class="bg-main text-white px-10 py-4 capitalize hover:bg-secondary hover:text-main transition-all">
      back </div>
  </a>
</aside>