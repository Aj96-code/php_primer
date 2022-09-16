
<?php $title = "Date Time Manipulations"?>
<?php include "includes/header.php"?>
    <h1><?php echo $title?></h1>
    <?php
        $dateNow = getdate();
        $timeNow  = time();
        echo "Today's Date: <br/>";
        echo "<p>".$dateNow["mday"]."</p>";
        echo "<p>".$dateNow["mon"]."</p>";
        echo "<p>".$dateNow["year"]."</p>";

        echo "<p>Today's Date: " .$dateNow["mday"]."/".$dateNow["mon"]."/".$dateNow["year"]."</p>";
        echo $timeNow."<br/>";

        print date("m/d/y G.i:s<br/>",$timeNow)."<br/>";
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", $timeNow);
    ?>
<?php require "includes/footer.php"?>