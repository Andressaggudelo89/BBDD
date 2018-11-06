<?php

    $passwd = $_POST["password"];
    $passwd2 = $_POST["password2"];

    if($passwd == $passwd2){

        include('connection.php');

        mysqli_set_charset($conn, "utf8");
        $name = trim($_POST["name"]);
        $lastname = trim($_POST["lastname"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $age = trim($_POST["age"]);
        $ccn = trim($_POST["ccn"]);
        
        $keywords=array("spiky","ambiguous","narrow","neighborly","tawdry","ratty","overt","smooth",
            "smoggy","somber","bitter","poised","panicky","abiding","anxious");

        $vect = explode(" ",strtolower($name));
        $username = $vect[0] . $keywords[rand(0,14)];

        $sql = "SELECT id FROM customer";
        $result = $conn->query($sql);
        $id = 200001 + $result->num_rows;

        // I already have all the data needed, save it on the database now.
        $sql = "INSERT INTO Customer VALUES ('$id', '$name', '$lastname', '$username', '$passwd', '$phone', '$email', '$age', '$ccn')";

        if ($conn->query($sql) === TRUE) {
            echo "Your username is: " . $username;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>