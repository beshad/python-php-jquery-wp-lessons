<main>
  <h1><?php echo $page; ?></h1>

<?php 
    $curl = curl_init();
    curl_setopt_array($curl, [
         CURLOPT_RETURNTRANSFER => 1,
         CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts',
    ]);
   // Send the request & save response to $result
   $result = curl_exec($curl);
   
   // decode a JSON string into an array
   $data = json_decode($result, true);

  //  echo '<pre>';
  //  print_r($data); 
  //  echo "</pre><br>";
   
    // Close request to clear up some resources
    curl_close($curl);

?>

<ul>
  <?php for ($x = 0; $x <= 10; $x++) { ?>
        <li> <?php echo $x.'-'.$data[$x]['title'] ?> </li>
    <?php } ?>
</ul>
</main>