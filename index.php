<!DOCTYPE html>
<html>
    <head>
        <title>All you need to know about my cats</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <?php
                $server = "localhost";
                $username = "rowan";
                $password = "Class!23";
                $database = "catinfo";
                $conn = mysqli_connect($server,$username,$password,$database);
                if(!$conn){
                        die("Connection failed: {mysqli_connect_error()}");
                }
                $sql = "select distinct colour from health_info;";
                $sql2= "select distinct name from health_info;";
                $result = mysqli_query($conn,$sql);
                $result2 = mysqli_query($conn,$sql2);
        ?>
        <script>
                function disclaimer(id) {
                        id.innerHTML = "All <b>cats</b> were consulted in the making of this site";
                }
                function hide(id) {
                        var x = document.getElementById(id);
                        if (x.style.display === "none") {
                                x.style.display = "block";
                        } else {
                                x.style.display = "none";
                        }
                }
                function changePhoto(x) {
                        var source=x.getAttribute("src");
                        if (source === "both1.jpeg") {
                                x.src = "both2.jpeg";
                        } else {
                                x.src = "both1.jpeg";
                        }
                }
                function changebut(elem){
                       elem.innerHTML = "don't try that again";
                }
                function req(x) {
                       if (x.innerHTML === ""){
                               hide("warn");
                       }
                }
                function loadDoc() {
                        const xhttp = new XMLHttpRequest();
                        xhttp.onload = function() {
                                document.getElementById("demo").innerHTML = this.responseText;
                        }
                        xhttp.open("GET", "best_cats.txt");
                        xhttp.send();
                }
        </script>
    </head>
    <body>
        <h1>My Cats!</h1>
        <h2>They are amazing</h2>
        <div>
            I have two cats. <br> 
            They are named <a href="sox.html" target="_blank">Sox</a> and <a href="bootz.html" target="_blank">Bootz</a>. <br> 
            Please see the above attached links for more information about each of them
        </div>
        <br>
        <div id="demo"></div>
        <button type="button" onclick="loadDoc()">Click for a list of the world's greatest cats</button>
        <br>
        <p id="disc" onclick="disclaimer(document.getElementById('disc'));">Please <b>click</b> on this text</p>
        <p>Please see these photos of them (click to change), as well as a survey below:<br></p>
        <button onclick="hide('im')">Hide this photo :(</button>
        <br>
        <img id="im" onclick="changePhoto(this);" src="both1.jpeg"/>
    </body>
    <form action="catform.php" method="POST">
        
        <br><br>
        <label for="signup">Sign-Up for their newsletter:</label>
        <br>
        <input type="text" onblur="req(this);" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" id="signup" name="signup"/>
        <p id="warn" style="display:none; font-size:75%; color:red">This field is required</p>
        <br>
        
        <label for="rating">On a scale of 1-10, how amazing are they?</label>
        <br>
        <input type="number" min="11" max="11" id="rating" name="rating"/>
        <br><br>
        
        Please select your favorte features of Sox and Bootz: <br>
        <input type="radio"> <label for="fluff">Their fluffiness</label>
        <br>
        <input type="radio"> <label for="smol">How small they are</label>
        <br>
        <input type="radio"> <label for="fur">Their fur</label>
        <br>
        <input type="radio"> <label for="eyes">Their eyes</label>
        <br>
        <input type="radio"> <label for="cute">Their cuteness</label>
        <br><br>

        Are they both amazing?<br>
        <select required>
            <option></option>
            <option>yes</option>
            <option>extremely</option>
        </select>
        <br><br>

        <input type="submit">
    </form>
    <button onclick="alert('No, you must stay and see how amazing they are'); changebut(this);">Click here to go away from this page.</button>
    <br><br>
    
    <p><b>Please select a colour of cat you are interested in from the following menu</b></p>
        <form action="sqlresponse.php" method="get">
                <label for="colour">Select a colour:</label></br>
                <select id="colour" name="colour">
                        <?php
                                foreach($result as $row){
                                        echo "<option value='{$row['colour']}'>{$row['colour']}</option>\n";
                                }
                                mysqli_close($conn);
                        ?>
                </select>
                </br>
                <input type="submit" value="Submit Colour"/>
        </form><br><br>  

     <p><b>Would you like to change the colour of a cat?</b></p>
        <form action="sqlresponse2.php" method="get">
                <label for="name">Select a cat:</label></br>
                <select id="name" name="name">
                        <?php
                                foreach($result2 as $row){
                                        echo "<option value='{$row['name']}'>{$row['name']}</option>\n";
                                }
                                mysqli_close($conn);
                        ?>
                </select>
                </br>
                
                <label for="colourchange">Choose a colour:</label><br>
                <input type="text" id="colourchange" name="colourchange">
                
                </br>
                <input type="submit" value="Submit Colour Change"/>
        </form><br><br>

        <p><b>Set an LED</b></p>
        <form action="ledset.php" method="get">
                <label for="ledset">Set an LED:</label></br>
                <select id="ledset" name="ledset">
                        <option></option>
                        <option>OFF</option>
                        <option>ON</option>
                </select>
                </br>
                <input type="submit" value="Submit LED Change"/>
        </form><br><br>

        <p><b>Check Sensor Readings</b></p>
        <form action="sensorinfo.php">
                <br>
                <input type="submit" value="Check Sensor Readings"/>
        </form><br><br>
</html>
