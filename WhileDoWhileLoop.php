
<?php $title = "While Do While Loop"?>
<?php require("./Includes/header.php")?>
    <h1><?php echo $title?></h1>
    <?php 
        $grade = 0;
        //Infinite Loop
        /*
        while($grade < 10)
        {
            echo "<p> I AM LESS THAN 10! Current Value[$grade] </p>";
        }*/
        //Pre-Condition Loop
        while($grade < 10)
        {
            echo "<p> I AM LESS THAN 10! Current Value {-[ $grade ]-} </p>";
            $grade++;
        }
        echo "<p style = 'color: green;'>EXIT LOOP</p>";
    ?>
    <h1> Do While Loop</h1>
    <?php
        //Post Condition Loop 
        $grade = 0;
        do
        {
            echo "<p>I AM DO WHILE LOOP</p>";
            $grade++;
        }while($grade < 10);
        echo "<p style = 'color: green;'>EXIT LOOP</p>";
    ?>
<?php require ("./Includes/footer.php");?>