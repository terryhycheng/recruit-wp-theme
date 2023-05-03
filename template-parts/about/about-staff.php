<?php
$team = get_field('our_team');
$query = new WP_Query(array(
  'post_type' => 'people',
  'meta_key' => array('order', 'fullname'),
  'orderby' => 'meta_value',
  'posts_per_page' => '99',
));
?>

<section class="min-h-[50vh] bg-bgGray mb-20">
  <div class="max-w-[1500px] mx-auto py-20 lg:py-32">
    <div class="text-center mb-8 lg:mb-16">
      <p class="small-title">our team</p>
      <h2 class="text-3xl lg:text-4xl capitalize"><?php echo $team['tagline'] ?></h2>
    </div>
    <div class="flex flex-wrap gap-4 lg:gap-6 justify-center mt-10">
      <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="hover:-translate-y-2 transition-all duration-300">
          <div class="relative overflow-hidden h-[200px] lg:h-[300px] w-[80vw] lg:w-[300px]">
            <img src="<?php echo get_field('profile_picture') ?>" alt="<?php the_title() ?>" class="object-cover w-full h-full transition-all hover:scale-105 duration-300">
          </div>
          <div class="px-8 py-6 bg-white">
            <p class="text-xl font-archivo"><?php the_title() ?></p>
            <p><?php echo get_field('title') ?></p>
          </div>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>
  </div>
</section>