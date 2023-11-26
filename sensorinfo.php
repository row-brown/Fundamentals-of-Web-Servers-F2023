<!DOCTYPE html>
<html>
    <head>
        <title>Your Sensor Readings</title>
        <?php
            $raw = `./bme280`;
            echo $raw;
            echo "hello";
            $deserialized = json_decode($raw,true);
            var_dump($deserialized);
            echo $deserialized("temperature");
        ?>
    </head>
</html>