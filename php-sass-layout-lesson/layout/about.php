<main class="container about">
  <button id="show-me-something">Show me something</button>
  <div class="box-wrapper">
  <?php for ($i = 1; $i < 9; $i++) { ?>
  <div class="box box-<?php echo $i?>" id="box-<?php echo $i?>">
      <h2>Box #<?php echo $i?></h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nulla numquam quae distinctio mollitia dignissimos saepe sunt accusantium officiis expedita sapiente rem cumque doloribus vero, nobis laudantium blanditiis? Ipsum, molestias?</p>
    </div>
  <?php } ?>
  </div>
</main>
