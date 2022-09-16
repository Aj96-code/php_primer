
<?php $title = "Function"?>
<?php include "includes/header.php"?>
    <h1><?php echo $title?></h1>
    <?php 
        //* Defining a Function
        function writeMessage()
        {
            echo "You are really nice person , Have a nice Time<br/>";   
        }
        //* Calling Function
        writeMessage();
        echo "<hr/>";
        writeMessage();
        //* Functions with parameters
        function addFunction($num1, $num2)
        {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is : $sum <br/>";
        }
        //* Pass By Reference - use ampersand in parameter
        function changeNum(&$num)
        {
            $num = $num + 10;
        }

        function returnProduct($num1, $num2)
        {
            return $num1 * $num2;
        }

        addFunction(10,20);
        $num = 500;
        addFunction(10,$num);
        addFunction("10","50");
        changeNum($num);

        echo $num ."<br/>";

        $return_value = returnProduct(10,200);

        echo $return_value . "<br/>";
    ?>
<?php require "includes/footer.php"?>