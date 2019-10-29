<main >
   <h1><?php echo $page?></h1>

   <?php
      $name='Behshad';
      $number= 10;
   ?>

      <?php echo $number * $number ?>

      <?php echo "my name is $name.";?>

      <?php
            for ($x = 0; $x <= 10; $x++) {
               echo "The number is: $x <br>";
            }
      ?> 

</main>