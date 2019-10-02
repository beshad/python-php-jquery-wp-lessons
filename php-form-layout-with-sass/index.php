

<?php 
$layout = $_GET["layout"];
if (!$layout) {
    $layout = "home";
};

if(isset($_GET['layout']) && !empty($_GET['layout'])){  
  $layout = $_GET['layout'];  
} else {
  $layout = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $layout; ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/styles/main.css">
</head>
<body>
    
    <?php
     include "partials/header.php";
     include "layout/$layout.php";
     include "partials/footer.php";
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/scripts/script.js"></script>
</body>
</html>


