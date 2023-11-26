<!DOCTYPE html>
<html>
    <head>
        <title>Your Sensor Readings</title>
        <?php
            $raw = `./bme280`;
            $deserialized = json_decode($raw,true);
            $temp = $deserialized["tempurature"];
            $alt = $deserialized["altitude"];
            $pres = $deserialized["pressure"];
        ?>
    </head>
    <body>
        <?php
            echo "Temperature is {$temp}</br>"
            echo "Altitude is {$alt}</br>"
            echo "Pressure is {$pres}</br>"
        ?>
    </body>
</html>