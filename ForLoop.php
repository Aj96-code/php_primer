
<?php $title = "For Loop"?>
<?php require ("./Includes/header.php");?>
    <h1><?php echo $title?></h1>
    <?php 
        //* For Loops
        for($count = 0; $count < 10; $count++)
        {
            echo "<p> HELLO WORLD</p>";
        }
        for($count = 0; $count < 10; $count++)
        {
            echo "<p>The count is: $count</p>";
           
        }
    ?>
<?php require ("./Includes/footer.php");?>