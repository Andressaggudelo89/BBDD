<DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Camping</title>
        <link rel="stylesheet" href="CSS/design.css"/>
        <link rel="stylesheet" href="CSS/nav.css"/>
        <link rel="stylesheet" href="CSS/combo.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header id="main_header">
            <h1>CAMPING TRIPS COLOMBIA</h1>
        </header>

        <nav id="main_nav">
            <ul>
                <li><a href="index.html">Home</a></li> <!-- Calls itself.--->
                <li><a href="who.html">About us</a></li>
                <li><a href="ourp.php">Places</a></li>
                <li><a href="oure.php">Employees</a></li>
                <li><a href="combo.php">Combos</a></li>
                <li><a href="cont.html">Contact</a></li>
                <li><a href="sign.html">Sing up</a></li>
                <li><a>Log in</a>
                    <ul>
                        <li><a href="logem.html">As employee</a></li>
                        <li><a href="logcm.html">As customer</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <section id="combo_section"> 
            <h2>Here our plans go...</h2>
            <p style="padding-left:5%">If you are interested in any of our combos, please log in to book it.</p><hr>
            <p style="padding-left:10%">Please click on the desired region to visualize the combos available there</p>
            <img src="images_home/col.jpg" alt="Regions of Colombia" usemap="#Map" class="center" />
            <map name="Map" id="Map">
                <area alt="" href="#pacifico" onclick="myFunction('pacifico')" shape="poly" coords="97,123,114,167,105,199,89,230,78,246,66,237,94,192,87,135" />
                <area alt="" href="#caribe" onclick="myFunction('caribe')" shape="poly" coords="193,60,160,106,145,124,133,125,116,123,107,136,104,119,119,98,129,74,164,61,196,44,212,44" />
                <area alt="" href="#andina" onclick="myFunction('andina')" shape="poly" coords="178,101,196,142,188,170,163,194,164,224,152,220,134,239,98,259,78,246,101,209,112,167,109,136,122,125" />
                <area alt="" href="#orinoco" onclick="myFunction('orinoco')" shape="poly" coords="201,140,231,141,248,155,284,154,278,189,259,191,240,190,223,209,193,213,178,219,163,205,171,192,186,177,197,160" />
                <area alt="" href="#amazonas" onclick="myFunction('amazonas')" shape="poly" coords="277,192,232,201,181,218,153,227,104,263,153,284,182,314,219,321,221,337,238,345,249,241,275,239,299,245" />
            </map><hr>


            <div style="display: none;" id="pacifico" class="example">
                <h2>Pacific/Chocó natural region</h2>
                <?php
                    include 'connection.php';   
                    $sql = "SELECT * FROM combo where placeid <=18 and placeid>=14";   //Pacifico
                    mysqli_set_charset($conn, "utf8");
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            echo
                            "<div><hr></br><p><ul>" .
                            "<li>" . $row["id"]. "</li>" . 
                            "<li>" . $row["placeid"] . "</li>" .
                            "<li>" . $row["duration"] . "</li>" .
                            "<li>" . $row["IdEmployee"] . "</li>" .
                            "<li>" . $row["description"] . "</li>" .
                            "<li>" . $row["Cost"] . " Dollars" . "</li></ul></p></div>";
                        }
                    }else{?>
                        <p>There is not any information about combos in this region to display.</p>
                <?php } ?>
            </div>





            <div style="display: none;" id="caribe" class="example">
                <h2>Caribbean region</h2>
                <?php
                    include 'connection.php';   
                    $sql = "SELECT * FROM combo where placeid <=6 and placeid>=1";   //Pacifico
                    mysqli_set_charset($conn, "utf8");
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            echo
                            "<div><hr></br><p><ul>" .
                            "<li>" . $row["id"]. "</li>" . 
                            "<li>" . $row["placeid"] . "</li>" .
                            "<li>" . $row["duration"] . "</li>" .
                            "<li>" . $row["IdEmployee"] . "</li>" .
                            "<li>" . $row["description"] . "</li>" .
                            "<li>" . $row["Cost"] . " Dollars" . "</li></ul></p></div>";
                        }
                    }else{?>
                        <p>There is not any information about combos in this region to display.</p>
                <?php } ?>
            </div>





            <div style="display: none;" id="andina" class="example">
                <h2>Andean natural region</h2>
                <?php
                    include 'connection.php';   
                    $sql = "SELECT * FROM combo where placeid <=13 and placeid>=7";   //Pacifico
                    mysqli_set_charset($conn, "utf8");
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            echo
                            "<div><hr></br><p><ul>" .
                            "<li>" . $row["id"]. "</li>" . 
                            "<li>" . $row["placeid"] . "</li>" .
                            "<li>" . $row["duration"] . "</li>" .
                            "<li>" . $row["IdEmployee"] . "</li>" .
                            "<li>" . $row["description"] . "</li>" .
                            "<li>" . $row["Cost"] . " Dollars" . "</li></ul></p></div>";
                        }
                    }else{?>
                        <p>There is not any information about combos in this region to display.</p>
                <?php } ?>
            </div>




            <div style="display: none;" id="orinoco" class="example">
                <h2>Orinoquía natural region</h2>
                <?php
                    include 'connection.php';   
                    $sql = "SELECT * FROM combo where placeid <=22 and placeid>=19";   //Pacifico
                    mysqli_set_charset($conn, "utf8");
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            echo
                            "<div><hr></br><p><ul>" .
                            "<li>" . $row["id"]. "</li>" . 
                            "<li>" . $row["placeid"] . "</li>" .
                            "<li>" . $row["duration"] . "</li>" .
                            "<li>" . $row["IdEmployee"] . "</li>" .
                            "<li>" . $row["description"] . "</li>" .
                            "<li>" . $row["Cost"] . " Dollars" . "</li></ul></p></div>";
                        }
                    }else{?>
                        <p>There is not any information about combos in this region to display.</p>
                <?php } ?>
            </div>




            <div style="display: none;" id="amazonas" class="example">
                <h2>Amazon natural region</h2>
                <?php
                    include 'connection.php';   
                    $sql = "SELECT * FROM combo where placeid <=25 and placeid>=23";   //Pacifico
                    mysqli_set_charset($conn, "utf8");
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            echo
                            "<div><hr></br><p><ul>" .
                            "<li>" . $row["id"]. "</li>" . 
                            "<li>" . $row["placeid"] . "</li>" .
                            "<li>" . $row["duration"] . "</li>" .
                            "<li>" . $row["IdEmployee"] . "</li>" .
                            "<li>" . $row["description"] . "</li>" .
                            "<li>" . $row["Cost"] . " Dollars" . "</li></ul></p></div>";
                        }
                    }else{?>
                        <p>There is not any information about combos in this region to display.</p>
                <?php } ?>
            </div>
        </section>


                <script>
                    function myFunction(region) {
                        var y = document.getElementsByClassName("example");
                        var i;
                        for (i = 0; i < y.length; i++) {
                            y[i].style.display = "none";
                        }

                        var x = document.getElementById(region);
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        } else {
                            x.style.display = "none";
                        }
                    }
                </script>
    </body>
</html>
