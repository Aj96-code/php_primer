
<?php $title = "IF Statement"?>
<?php require ("./Includes/header.php");?>
    <h1><?php echo $title?></h1>
    <?php

        echo "<h2> If Statement</h2>";
        
        $gradeInt = 50;

        if($gradeInt >= 50)
        {
            echo 
                "<h3 style='color: green;'>YOU HAVE PASSED<h3>";
        }
        else
        {
            echo 
                "<h3 style='color: red;'>YOU HAVE FAILED<h3>";

        }
        $gradeChar = "F";
        if($gradeChar == "A")
        {

            echo 
                "<h2 style='color: green;'>YOU ARE A SUPERSTAR!<h2>";
        }
        else if ($gradeChar == "B")
        {

            echo 
                "<h2 style='color: blue;'>YOU DID WELL!<h2>";
        } else 
        {
            
            echo 
                "<h2 style='color: red;'>YOU HAVE FAILED<h2>";
        }
    ?>
<?php require ("./Includes/footer.php");?>