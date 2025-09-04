<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<h3>Conditional Statement</h3>";
            // no user input(edit tha value here)
            $Let1 = "A";
            $num1 = 1;
            $Let2 = "B";
            $num2 = 2;
            
            // if satement
            if ($Let1 == "A"){
                echo "value: ", $Let1;
                echo "<br>I think That's letter A<br>";
            }
            
            //if else statement
            if ($num1 = 1){
                echo "value: ", $num1;
                echo "<br>You've entered number 1<br>";
            } else {
                echo "value: ", $num1;
                echo "<br>That's not 1 I guess<br>";
            }
            
            //if elseif else statement
            if ($Let2 == "B"){
                echo "value: ", $Let2;
                echo "<br>That is an upper case B<br> ";
            } elseif ($Let2 == "b"){
                echo "value: ", $Let2;
                echo "<br> That is a lower case b<br>";
            } else {
                echo "value: ", $Let2;
                echo "<br>Di ko man alam yan uy<br>";
            }

            switch ($num2){
                case 1:
                    echo "value: ", $num2;
                    echo "<br>1 means one call away";
                    break;
                case 2:
                    echo "value: ", $num2;
                    echo "<br>2 means too good at goodbye";
                    break;
                default:
                    echo "<br>W H A T I S T H A T ?";        
            }
        ?>
    </body>
</html>