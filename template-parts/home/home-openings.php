<?php $query = new WP_Query(array('post_type' => 'jobs', 'posts_per_page' => '3')); ?>

<section class="max-w-[1500px] mx-auto px-4 min-h-[40vh] py-20">
  <div class="flex justify-between items-center">
    <div>
      <p class="small-title">jobs</p>
      <h2 class="capitalize text-3xl">latest openings</h2>
    </div>
    <?php echo custom_link("jobs") ?>
  </div>
  <div class="grid lg:grid-cols-3 my-8">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
    <div
      class="text-white bg-main flex flex-col text-sm p-10 border border-white hover:text-main hover:bg-secondary transition-all">
      <div class="flex-1">
        <h3 class="text-lg"><?php the_title() ?></h3>
        <p><?php the_field('location') ?></p>
      </div>
      <p class="my-6"><?php the_field('salary') ?></p>
      <p class="line-clamp-3">
        <?php echo get_the_excerpt() ?>
      </p>
      <div class="flex">
        <a href="<?php echo get_post_permalink() ?>" class="mt-8 block capitalize underline">view job</a>
      </div>
    </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
  </div>
</section>