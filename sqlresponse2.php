<!DOCTYPE html>
<html>
    <head>
        <title>Colour Change!</title>
        <?php
            $colour=htmlspecialchars($_GET["colourchange"]);
            $name=htmlspecialchars($_GET["name"]);
            $server = "localhost";
            $username = "rowan";
            $password = "Class!23";
            $database = "catinfo";
            $conn = mysqli_connect($server,$username,$password,$database);
            if(!$conn){
                die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "update from health_info set colour=$colour where name=$name;";
            $result = mysqli_query($conn,$sql);
        ?>
    </head>
    <body>
        <?php
            echo "{$name} is now {$colour}<br/>";
            echo $sql;
            mysqli_error($conn);
            mysqli_close($conn);
        ?>
    </body>
</html>
