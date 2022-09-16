
<?php $title = "String Manipulation"?>
<?php require("./Includes/header.php");?>
        <h1><?php echo $title?></h1>
        <?php
            $combine = "stand run jump"; 
            $phrase1 = "Student who came late";
            $phrase2 = "In class, stand with rock";
            $name = "aziel thompson";
            echo $phrase1.", name Tiffany, ".$phrase2;
            echo "<br/>";
            echo "<hr/>";
            //String Transformation
            echo "Uppercase first letter: " .ucfirst($name)."<br/>";
            echo "Uppercase first letter of each word: " .ucwords($name)."<br/>";
            echo "Upper Case: ".strtoupper($name)."<br/>";
            echo "Lower Case: ".strtolower("THIS WAS ALL LOWER CASE TEXT")."<br/>";
            echo "<hr/>";

            echo "Repeat String: ". str_repeat("a",10)."<br/>";
            echo "Repeat String: ". strtoupper(str_repeat("a",10))."<br/>";
            echo "Get a Substring: " .substr($name, 5,10);
            echo "<hr/>";
            echo "Get Position of String: " .strpos($name, "n")."<br/>";
            echo "<hr/>";
            echo "Find Character 'R': " .strchr($name, "R")."<br/>";
            echo "Find Character 'r': " .strchr($name, "r")."<br/>";
            echo "Find Character 's': " .strchr($name, "s")."<br/>";
            echo "Find Character 'e': " .strchr($name, "e")."<br/>";
            echo "<hr/>";

            echo "Find Length of String: ".strlen($name)."<br/>";
            echo "<hr/>";
            echo "Without Trim: "."A"." B C D "."E"." <br/>";
            echo "Trim space on both sides: "."A".trim(" B C D ")."E"." <br/>";
            echo "Trim space to the left: "."A".ltrim(" B C D ")."E"." <br/>";
            echo "Trim space to the right: "."A".rtrim(" B C D ")."E"." <br/>";
            echo "<hr/>";
            echo "Replace string with another: ".str_replace("stand","sit",$combine).
                "<br/>";

        ?>
<?php require ("./Includes/footer.php");?>