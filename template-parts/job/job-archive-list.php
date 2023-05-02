<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'post_type' => 'jobs',
  'posts_per_page' => 3,
  'order_by' => 'date',
  'paged' => $paged
);
$query = new WP_Query($args); ?>

<section class="my-20 max-w-[1500px] mx-auto flex flex-col gap-8 px-4">
  <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
      <article class="border flex flex-col">
        <div class="grid grid-cols-3 gap-4 lg:gap-10 p-10 lg:px-20 lg:py-16 lg:pb-0">
          <div class="col-span-3 lg:col-span-1">
            <h2 class="text-2xl mb-2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <p><?php echo get_field('location') ?></p>
            <p class="my-6 lg:my-10"><?php echo get_field('salary') ?></p>
          </div>
          <div class="col-span-3 lg:col-span-2 text-sm lg:text-base">
            <?php the_excerpt(); ?>
          </div>
        </div>
        <div class="flex flex-col self-end">
          <?php echo custom_link(get_the_permalink()) ?>
        </div>
      </article>

    <?php endwhile; ?>
</section>
<div class="flex justify-center mb-20" id="pagination">
  <?php
    $GLOBALS['wp_query']->max_num_pages = $query->max_num_pages;
    the_posts_pagination(); ?>
</div>

<?php endif; ?>