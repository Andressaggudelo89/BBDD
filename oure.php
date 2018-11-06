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

        <section id="empl_section"> 
        <h2>Get informed about our employees</h2>
            <?php
                include 'connection.php';   
                $sql = "SELECT * FROM Employee";
                mysqli_set_charset($conn, "utf8");
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo
                        "<div><hr></br><p><img src='images_home/1.jpg' alt='Pineapple'>" .
                        "<ul><li>" . $row["name"] . " " . $row["lastname"]. "</li>" . 
                        "<li>" . $row["age"] . ' years old' . "</li>" .
                        "<li>" . $row["location"] . "</li>" .
                        "<li>" . $row["mail"] . "</li>" .
                        "<li>" . $row["description"] . "</li></ul></p></div>";
                    }
                }else{?>
                    <p>There is not any information about employees to display.</p>
            <?php } ?>

        </section>

    </body>
</html>