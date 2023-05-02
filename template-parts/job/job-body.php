<div class="flex-1">
  <section>
    <h2 class="text-2xl mb-4">Description</h2>
    <div class="prose max-w-full">
      <h3 class="my-10"><?php the_title() ?></h3>
      <?php echo get_field('description') ?>
    </div>
  </section>
  <hr class="my-16">
  <section>
    <h2 class="text-2xl mb-4">Apply For This Role</h2>
    <div class="form">
      <?php echo do_shortcode('[wpforms id="121"]')  ?>
    </div>
  </section>
</div>