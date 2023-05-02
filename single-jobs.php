<?php get_header() ?>

<?php get_template_part('template-parts/job/job-hero') ?>
<div class="flex flex-col lg:flex-row gap-20 max-w-[1500px] mx-auto px-4 my-20">
  <?php get_template_part('template-parts/job/job-sidebar') ?>
  <?php get_template_part('template-parts/job/job-body') ?>
</div>

<?php get_footer() ?>