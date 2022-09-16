
<?php $title = "Home"?>
<?php include "./includes/header.php"?>
<h1>Hello World - PHP Primer</h1>
<br/>
<?php
    /* [echo] - Writes elements or text to 
        the html document on server side.
        Meaning when the client devices gets it, it
        is already added to the html document.
    */
    echo "Hello PHP!";
    echo "<br/>";
    echo "Second Line";
    echo "<br/>";
    //* Use $ to Declare variables
    $name = "Aziel Thompson";
    $age = 22;
    //* . are used to extend or add strings in php
    echo "<h1>My Name Is: $name </h1>";
    echo "<h1>My Age Is: $age </h1>";
    
?>
<button type="button" class="btn btn-outline-dark">CLICK ME!</button>
<button type="button" class="btn btn-outline-primary">CLICK ME!</button>
<button type ="button" class="btn btn-outline-success">CLICK ME!</button>
<?php require "./includes/footer.php"?>