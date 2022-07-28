<?php
    $title = "Sting Manipulation";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php
    //concatenation of strings
    $phrase1 = 'Student came late in the class';
    $phrase2 = 'stand back with the rock in the hand.';
    $name = 'kartikey tiwari';
    echo $phrase1. ", " .$phrase2;
    echo '<br/>';
    echo '<hr/>';
    //String transformation
    echo 'Uppercase first letter :' .ucfirst($name).'<br/>';
    echo 'Uppercase first letter of each word :' .ucwords($name).'<br/>';
    echo 'Upper Case: '.strtoupper($name).'<br/>';
    echo 'Lower Case: '.strtolower("THIS WAS ALL UPERCASE").'<br/>';
    echo '<hr/>';
    echo 'Repeat String : '.str_repeat('a',10).'<br/>';
    echo 'Repeat String : '.strtoupper(str_repeat('a',10)).'<br/>';
    echo 'Get a Substring :'.substr($name,3,5).'<br/>';
    echo 'Get postion of String :'.strpos($name,'y').'<br/>';
    //Return Null
    //echo 'Get postion of Sting :'.strpos($combine,'z').'<br/>';
    echo 'Find Character "K" :'.strchr($name, 'K').'<br/>';
    echo 'Find Character "k" :'.strchr($name, 'k').'<br/>';
    echo 'Find Character "t" :'.strchr($name, 't').'<br/>';
    echo 'Find Character "r" :'.strchr($name, 'r').'<br/>';

    echo 'Find the Length of the String :'.strlen($name).'<br/>';
    echo 'Without Trim :'. "A" . "B C D" . "E" . '<br/>';
    echo 'Trim the Spaces on the both sides :'."A".trim("   B C D   ")."E"."<br/>";
    echo 'Trim spaces to the left :'."A".ltrim("    B C D      ")."E"."<br/>";
    echo 'Trim space to the right :'."A".rtrim("    B C D      ")."E"."<br/>";
    echo 'Replace string with another :'.$phrase1. ", " .str_replace('stand','sit',$phrase2).'<br/>';
    ?>
 <?php 
   require 'includes/footer.php'
   ?>