<?php
    $title = "User Defind Function";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
    /* Defining a Function */
    function writeMessage(){
        echo "You are really nice person. Have a nice day!!<br/>";
    }
    //Calling a Function
    writemessage();
    echo "<hr/>";
    writemessage();

   /*Function with Parameter*/
    function addFunction($num1,$num2){
        $sum = $num1 + $num2;
        $num2 = $num2 + 1;
        echo "The Sum of $num1 and $num2 is : $sum <br/>";
    }
    /*Pass by reference - Use ampersand in parameter */
    function changeNum(&$num){
        $num = $num + 10;
    }
    function returnProduct($num1,$num2){
        $prod = $num1 * $num2;
        return $prod;
    }


    addFunction(123,321);
    $num = 500;
    addFunction($num, 10);
    addFunction('4','5');
    addFunction('500',$num);
    echo '<hr/>';    
    changeNum($num);
    echo $num.'<br/>';
    echo $return_value = returnProduct(10,200);
    ?>
 <?php 
   require 'includes/footer.php'
   ?>