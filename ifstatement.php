<?php
    $title = "If Statement";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <h3 style = "color : pink">I am using If Statement</h3>
    <?php 
    // An If statement that will carry out an action based on the value of the variable.

    echo '<h2>If statement</h2>';
    
    $grade = 98;

    if($grade >= 99){
        echo '<h3 style="color:green">You have Passed</h3>';
    }
    else{
        echo '<h3 style="color:red">You have failed</h3>';
    }

    //If-Else If-Else
    $grade='A';
    if($grade=='A'){
        echo '<h2 style="color:green">You are a Super Star</h2>';
    }
    elseif($grade=='B'){
        echo '<h2 style="color:blue">You did Well</h2>';
    }
    else{
        echo '<h2 style="color:red">You Failed...</h2>';
    }
    ?>
 <?php 
   require 'includes/footer.php'
   ?>