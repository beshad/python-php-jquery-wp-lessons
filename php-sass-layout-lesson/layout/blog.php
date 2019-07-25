<?php
require './partials/db.php';

$query = 'SELECT * from posts';
$result = mysqli_query($conn, $query);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close();

?>

<main class="container blog">
  <div class="box-wrapper">
  <?php foreach ($posts as $post) {?>
  <div class="post">
      <h2><?php echo $post['title']; ?></h2>
      <p><?php echo $post['body']; ?></p>
  </div>
  <?php }?>
  </div>
</main>



