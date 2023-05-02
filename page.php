<?php get_header() ?>

<?php get_template_part('template-parts/single-hero') ?>

<!-- If the page is `About` -->
<?php if (get_the_ID() == 53) :
  get_template_part('template-parts/about/about-ceo');
  get_template_part('template-parts/about/about-staff');
  get_template_part('template-parts/home/home-contact');
endif; ?>

<?php get_footer() ?>