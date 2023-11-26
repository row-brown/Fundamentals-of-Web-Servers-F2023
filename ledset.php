<!DOCTYPE html>
<html>               
    <head>
        <title>LED Set</title>
        <script>
            function set_led(x) {
                if(x==="ON"){
                    $output = shell_exec("gpio write 0 1")
                }
                if(x==="OFF"){
                    $output = shell_exec("gpio write 0 0")
                }
            }
        </script>
    </head>
    <body>
        <p>You chose to change the LED to: <?= $set=htmlspecialchars($_GET['ledset'])?></p>
        <?= set_led($set)?>
    </body>
</html>



                        