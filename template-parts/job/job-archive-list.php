<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'post_type' => 'jobs',
  'posts_per_page' => 3,
  'order_by' => 'date',
  'paged' => $paged
);
$query = new WP_Query($args); ?>
<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

<article class="latest-news">
  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <?php the_excerpt(); ?>
  <a href="<?php the_permalink() ?>" class="secondary-cta">Read more <span class="fa fa-chevron-right"></span></a>
</article>


<?php endwhile; ?>
</ul>

<div id="news-navigation">
  <?php
    $GLOBALS['wp_query']->max_num_pages = $query->max_num_pages;
    the_posts_pagination(); ?>

  <div class="clearfix"></div>
</div>

<?php else : ?>
<h2><?php _e('Not Found', 'welsh-womens-aid'); ?></h2>
<p><?php _e("Sorry, but you are looking for something that isn't here.", 'welsh-womens-aid'); ?></p>
<?php endif; ?>