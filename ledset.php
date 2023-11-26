<!DOCTYPE html>
<html>               
    <head>
        <title>LED Set</title>
        <script>
            function set_led(x) {
                if(x==="ON"){
                    $output = shell_exec("gpio write 0 1")
                    echo "LED turned ON"
                }
                if(x==="OFF"){
                    $output = shell_exec("gpio write 0 0")
                    echo "LED turned OFF"
                }
            }
        </script>
    </head>
    <body>
        <?= set_led($htmlspecialchars($_GET['ledset']))?>
    </body>
</html>



                        