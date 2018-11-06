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

        <section id="combo_section"> 
            <h2>Here our plans go...</h2><hr>
            <p style="padding-left:10%">Please click on the desired region to visualize the combos available there</p>
            <img src="images_home/col.jpg" alt="Regions of Colombia" usemap="#Map" class="center" />
            <map name="Map" id="Map">
                <area alt="" title="" href="pacifico.html" shape="poly" coords="97,123,114,167,105,199,89,230,78,246,66,237,94,192,87,135" />
                <area alt="" title="" href="caribe.html" shape="poly" coords="193,60,160,106,145,124,133,125,116,123,107,136,104,119,119,98,129,74,164,61,196,44,212,44" />
                <area alt="" title="" href="andina.html" shape="poly" coords="178,101,196,142,188,170,163,194,164,224,152,220,134,239,98,259,78,246,101,209,112,167,109,136,122,125" />
                <area alt="" title="" href="orinoco.html" shape="poly" coords="201,140,231,141,248,155,284,154,278,189,259,191,240,190,223,209,193,213,178,219,163,205,171,192,186,177,197,160" />
                <area alt="" title="" href="amazonas.html" shape="poly" coords="277,192,232,201,181,218,153,227,104,263,153,284,182,314,219,321,221,337,238,345,249,241,275,239,299,245" />
            </map><hr>
            Hello
        </section>

    </body>
</html>

<!--
    Caribbean region:
        Tayrona National Natural Park
        INSERT INTO place(id, name, location, region, hours, phone, description)
        VALUES (1, "Tayrona National Natural Park", "Magdalena", "Caribe", "8:00-17:00", "(1) 3532400", "The foothills of the Sierra Nevada de Santa Marta, the highest coastal mountain in the world, plunge into the sea like the fingers of a gigantic hand forming beautiful bays and coves: Chengue, Gayraca, Cinto, Neguanje, Concha, Guachaquita, with their sandy white beaches surrounded by mangrove swamps, bushes and forests and bathed in the crystal clear water of the Caribbean sea, are all part of the many attractions in Tayrona National Natural Park."),
        (2, "Sierra Nevada", "Santa Marta", "Caribe", "6:00-22:00", "312 4482695", "The Sierra Nevada de Santa Marta is the birthplace of the Tayrona, a monumental indigenous civilization that existed in the country."),
        (3, "Rosario Islands", "Cartagena", "Caribe", "8:00-16:00", "+49 (0) 3056839445", "The Rosario Islands are an archipelago located within a national park on the Colombian Caribbean coast, only about an hour from the popular tourist city of Cartagena. They are beautiful, diverse, and well worth a visit, for a day or even longer. So here are 15 reasons why you should visit the Rosario Islands at least once in your lifetime."),
        (4, "Tolú Coveñas", "Sincelejo", "Caribe", "7:30-15:30", "3116047950", "No description available for this place."),
        (5, "El Totumo Volcano", "Santa Catalina", "Caribe", "8:00-15:00", "3116047950", "If you find yourself in Cartagena, chances are that you’ll come across posters advertising the Totumo Mud Volcano. It’s sort of a rite of passage in Cartagena – if you come here, you’ll visit the volcano."),
        (6, "Los Flamencos Sanctuary", "Riohacha", "Caribe", "7:00-17:30", "(57 5) 7282636", "The visitor can enjoy the quietness of the clear blue skies of La Guajira peninsula, interrupted only by intensely pink skies spiraling over the lagoons of the Sanctuary.");

    Andean natural region:
        Guatapé
        Valle del Cocora
        Nevado del Ruiz
        Desierto de la tatacoa
        Parque Nacional Natural El Tuparro
        Parque Nacional Natural Los Nevados
        Parque Nacional Natural Chingaza
        Parque Nacional Natural Cueva de los Guácharos
    Pacific/Chocó natural region:
        Parque Nacional Natural Utría
        lago calima
        Bahía Solano
        Paraíso Guachalito
        Cabañas playa terco

    Orinoquía natural region:
        Parque Nacional Natural Puracé
        Parque nacional natural El Tuparro
        Sierra de la Macarena
        Parque nacional natural El Cocuy

    Amazon natural region:
        Parque Ecologico Mundo Amazonico
        Parque nacional natural Sierra de Chiribiquete
        Parque nacional natural Amacayacu
        Parque nacional natural Cahuinarí
-->