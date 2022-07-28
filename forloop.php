<?php
    $title = "For Loop";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
    //For Loops
    for($count = 0; $count<10; $count++){
        $n = $count +1;
     echo '<h2>My Name is Turkey '.$n.'</h2>';     
   }
   for($count = 0; $count<10; $count++){
    echo "<p>The count is : $count</p>";
    
   }
    ?>
 <?php 
   require 'includes/footer.php'
   ?>