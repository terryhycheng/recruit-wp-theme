<div class="max-w-[1500px] mx-auto px-4 min-h-[40vh] py-20">
  <div class="flex justify-between items-center">
    <div>
      <p class="small-title">jobs</p>
      <h2 class="capitalize text-3xl">latest openings</h2>
    </div>
    <?php echo custom_link("jobs") ?>
  </div>
  <div class="grid lg:grid-cols-3 my-8">
    <?php foreach ([1, 2, 3] as $char) : ?>
    <div class="text-white bg-main text-sm p-10 border border-white hover:text-main hover:bg-secondary transition-all">
      <h3 class="text-lg">Frontend Developer</h3>
      <p>Manchester, UK</p>
      <p class="my-6">£40000 - £55000 per annum</p>
      <p>
        Lorem ipsum dolor sit amet consectetur. Turpis sed pulvinar sed blandit rhoncus tellus senectus at quis. Mi at
        fermentum imperdiet velit magna a aliquam. Faucibus et quam ac elit placerat tristique vulputate
      </p>
      <div class="flex">
        <a href="#" class="mt-8 block capitalize underline">view job</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>