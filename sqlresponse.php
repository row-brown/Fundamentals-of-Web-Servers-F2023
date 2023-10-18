<!DOCTYPE html>
<html>
    <head>
        <title>Your Selected Colour of Interest</title>
        <?php
            $colour=htmlspecialchars($_GET["colour"]);
            $server = "localhost";
            $username = "rowan";
            $password = "Class!23";
            $database = "catinfo";
            $conn = mysqli_connect($server,$username,$password,$database);
            if(!$conn){
                die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select name,real_or_fake,colour from health_info where colour='{$colour}';";
            $result = mysqli_query($conn,$sql);
        ?>
    </head>
    <body>
        You selected the colour <?= $colour ?>.</br>
        <?php
            foreach($result as $row){
                echo "Name: {$row['name']} | Fictional?: {$row['real_or_fake']} | Colour: {$row['colour']}"<br>;
            }
            mysqli_close($conn);
        ?>
    </body>
</html>
