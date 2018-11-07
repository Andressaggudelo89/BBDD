<DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Camping</title>
        <link rel="stylesheet" href="CSS/design.css"/>
        <link rel="stylesheet" href="CSS/nav.css"/>
        <link rel="stylesheet" href="CSS/ourp.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header id="main_header">
            <h1>CAMPING TRIPS COLOMBIA</h1>
        </header>

        <nav id="main_nav">
            <ul>
                <li><a href="index.html">Home</a></li> <!-- Calls itself.--->
                <li><a href="who.html">Who we are</a></li>
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

       

        <section id="places_section"> 
         <h2>Check out our available camping places</h2>
         <?php
            include 'connection.php';   
            $sql = "SELECT * FROM place";
            mysqli_set_charset($conn, "utf8");
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    echo
                    "<div><hr></br><p>" .
                    "<ul><li><b>Name: </b>" . $row["name"] . "</li>" .
                    "<li><b>Location: </b>" . $row["location"] . "</li>" .
                    "<li><b>Hours of service: </b>" . $row["hours"] . "</li>" .
                    "<li><b>Contact phone: </b>" . $row["phone"] . "</li>" .
                    "<li><b>Description: </b>" . $row["description"] . "</li></ul></p></div>";
                }
            }else{?>
                <p>There is not any information about employees to display.</p>
        <?php } ?>
               
                
        </section>

    </body>
</html>