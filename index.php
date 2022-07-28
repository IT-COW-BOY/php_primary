    <?php
       $title = "Index";
       include 'includes/header.php'
    ?>
    <!-- This is basic HTML -->
    <h1>
        Hello World!
        <h3>Welcome to the PHP Primer - Index</h3> Hi "I am thirsty!!"<br>
    </h1>
    <?php
    // This is a print statement 
    /*This is a print statement*/ 
    echo "PHP is great!!";
    echo "<br>";
    echo "Python and JavaScript are also nice!!";
    echo "<br>";
    ?>
    <?php
    //declare variable  
    $name = 'Kartikey Tiwari';
    $age = 26;
    //echo variable
    echo $name;
    echo '<h1>My Name is '.$name.'<h1>';
    echo '<h1>My Age is '.$age.'</h1>';
    echo "<h1>My Name is : $name </h1>"
    ?>
    <button type="button" class="btn btn-dark">Click Me!</button>
    <button type="button" class="btn btn-primary">Click Me!</button>
    <button type="button" class="btn btn-success">Click Me!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
   <?php 
   require 'includes/footer.php'
   ?>