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
            echo $deserialized("temperature");
            echo $temp;
        ?>
    </head>
</html>