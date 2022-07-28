    <?php
    $title = "Array";
    include 'includes/header.php'
    ?>  
<h1><?php echo $title ?></h1>
<?php 
//Declaration of Variable
  $num = 3;

//Declaration of Array
//Only one data type 
//Homogenous Array
  $number = array(1,2,3,4,5,6,7,8,9,10,64,56,546,546,54,654,6,546,567,7,867,8,7,65,2,6787,4,6,67,8,7,42,36,58);
  echo $number[5];
  echo "<p>$number[9]</p>";
  $size = count($number);
  echo "<p>The size of array is : $size</p>";
  for($count=0; $count<$size; $count++){
  echo "<p>$number[$count]</p>";
  }
?>

<?php 
   require 'includes/footer.php'
   ?>