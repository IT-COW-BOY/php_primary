<?php
    $title = "While/Do While Loops";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
    $grade = 0;
    // //INFINITE LOOP
    // while($grade < 10){
    //     echo'<p>I am less than 10</p>';
    // }
    // Precondition LOOP
    while($grade < 10){
        echo'<p>I am less than 10!!</p>';
        $grade++;
    }
    echo'EXIT LOOP';
    ?>
    <h1>Do While Loop</h1>
    <?php
    //POST CONDITION LOOP
    $grade = 0;
    do{
        echo'<p>I am DO WHILE LOOP</p>';
        $grade++;
    }while($grade < 10);
    echo'EXIT LOOP';
    ?>
 <?php 
   require 'includes/footer.php'
   ?>