<?php
      if(isset($_GET['page']) && !empty($_GET['page'])){  
        $page = $_GET['page'];  
      } else {
        $page = 'home';
      }
?>

<?php
    include "includes/header.php";
    include "pages/$page.php";
    include "includes/footer.php";
?>