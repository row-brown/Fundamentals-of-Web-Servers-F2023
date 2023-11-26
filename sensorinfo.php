<!DOCTYPE html>
<html>
    <head>
        <title>Your Sensor Readings</title>
        <?php
            $raw = `./bme280`;
            $deserialized = json_decode($raw,true);
            var_dump($deserialized);
            $temp = $deserialized("temperature");
            $alt = $deserialized("altitude");
            $pres = $deserialized("pressure");
        ?>
    </head>
    <body>
        <?php
            echo "The temperature is {$temp}<br/>";
            echo "The altitude is {$alt}<br/>";
            echo "The pressure is {$pres}<br/>";
        ?>
    </body>
</html>