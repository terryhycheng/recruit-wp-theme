    <?php $contact = get_field('contact'); ?>

    <section class="max-w-[1500px] mx-auto px-4 pb-32 min-h-[30vh] items-center flex flex-col lg:flex-row gap-4">
      <div class="flex-1 lg:mb-20">
        <div class="max-w-md">
          <p class="small-title">contact</p>
          <h2 class="text-4xl my-4"><?php echo $contact['tagline'] ?></h2>
          <p><?php echo $contact['content'] ?></p>
        </div>
      </div>
      <div class="form flex-1 w-full">
        <?php echo do_shortcode('[wpforms id="94"]') ?>
      </div>
    </section>