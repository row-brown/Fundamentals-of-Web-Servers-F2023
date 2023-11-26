<!DOCTYPE html>
<html>
    <head>
        <title>Your Selected Colour of Interest</title>
        <?php
            $raw = `./bme280`;
            $deserialized = json_decode($raw,true);
            $temp = $deserialized("temperature");
            $pres = $deserialized("pressure");
            $alt = $deserialized("altitude");
        ?>
    </head>
    <body>
        <?php
            echo "The temperature is $temp"
            echo "The altitude is $alt"
            echo "The pressure is $pres"
        ?>
    </body>
</html>