<!DOCTYPE html>
<html>               
    <head>
        <title>LED Set</title>
        <p><?= var_dump($_GET) ?></p>
        <?php
            mysqli_close($conn);
        ?>
        <script>
            function changePhoto(x) {
                var source=x.getAttribute("ledset");
                if(source==="ON"){
                    $output = shell_exec("gpio write 0 1")
                }
                if(source==="OFF"){
                    $output = shell_exec("gpio write 0 0")
                }
            }
        </script>
    </head>
    <body>
        <p>You chose to change the LED to: <?= htmlspecialchars($_GET['ledset'])?></p>
    </body>
</html>



                        