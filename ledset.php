<!DOCTYPE html>
<html>
    <head>
        <title>Setting the LED</title>
        <?php
            $set=htmlspecialchars($_GET["ledset"]);
        ?>
    </head>
    <body>
        You set the led to <?= $set ?>.</br>
        <?php
            if($set==="ON"){
                $output = shell_exec("gpio write 0 1");
                echo "LED turned ON";
            }
            elseif ($set==="OFF"){
                $output = shell_exec("gpio write 0 0");
                echo "LED turned OFF";
            }
            else{
                echo "Please select am ON/OFF value";
            }
        ?>
    </body>
</html>

                        