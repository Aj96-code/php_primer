<?php $title = "Arrays and Printouts"?>
<?php include "includes/header.php"?>
<h1><?php echo $title?></h1>
<?php
    //a variable
    $num = 3;
    // an array
    $numbers = array(1,2,3,4,5,6,7,8,9,10);

    echo "<p>$numbers[5]</p>";
    echo "<p>$numbers[7]</p>";
    echo "<p>Array Numbers is size: {-[ ".count($numbers)." ]-}</p>";
    

    for($index = 0; $index < count($numbers) - 1; $index++)
    {
        echo "<p> $numbers[$index]</p>";
    }
?>

<?php require "includes/footer.php"?>