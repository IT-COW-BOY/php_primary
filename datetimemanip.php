<?php
    $title = "Date and Time Manipulation";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
    $datenow = getdate();
    echo "Today's Date is :<br/>";
    echo '<p>'.$datenow['mday'].'</p>';
    echo '<p>'.$datenow['mon'].'</p>';
    echo '<p>'.$datenow['year'].'</p>';
    echo "Today's Date : ".$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'].'<br/>';
    echo time() . '<br/>';
    
    print date("m/d/y G.i:s<br>", time()) . '<br/>';
    print "Today is : ";
    print date("j of F Y, \a\\t g.i a", time());
    ?>
 <?php 
   require 'includes/footer.php'
   ?>