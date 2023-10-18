<!DOCTYPE html>
<html>
    <head>
        <title>Your Selected Colour of Interest</title>
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
            $sql = "update from health_info set colour=$colour where name=$name';";
            $result = mysqli_query($conn,$sql);
        ?>
    </head>
    <body>
        Succes!
    </body>
</html>
