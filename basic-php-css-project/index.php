<?php

$page = $_GET['page'];

if(!$page ){  
    $page = 'home';
};

?>

<!DOCTYPE html>
<html lang="en">
      <?php include "includes/head.php"; ?>
<body>
      <?php
          include "includes/header.php";
          include "pages/$page.php";
          include "includes/footer.php";
      ?>
</body>
</html>