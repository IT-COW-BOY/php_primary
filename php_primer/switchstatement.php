<?php
    $title = "Switch Statement";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <h2>Hello Switch World @123</h2>
    <?php
    $grade = 'B';
    switch($grade){
    case 'A' :
        echo '<h2 style = "color:green">You are a Super Star</h2>';
        break;
    case 'B' :
        echo '<h2 style = "color:blue">You did well !!</h2>';
        break;
    default :
        echo '<h2 style ="color:red">You Failed</h2>';
        break;
    }
    ?>
 <?php 
   require 'includes/footer.php'
   ?>