<!DOCTYPE html>
<html>
    <head>
        <title>Your Selected Colour of Interest</title>
        <?php
            $name=htmlspecialchars($_GET["colour"]);
            $server = "localhost";
            $username = "rowan";
            $password = "Class!23";
            $database = "catinfo";
            $conn = mysqli_connect($server,$username,$password,$database);
            if(!$conn){
                die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select name,weight,day_of_birth,month_of_birth,year_of_birth,colour from health_info where colour='{$colour}';";
            $result = mysqli_query($conn,$sql);
        ?>
    </head>
    <body>
        You selected the colour <?= $colour ?>.</br>
        <?php
            foreach($result as $row){
                echo "Name:($row['name']) | Fictional:($row['real_or_fake']) | Colour:($row['colour'])";
            }
            mysqli_close($conn);
        ?>
    </body>
</html>