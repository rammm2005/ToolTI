<?php
    $user_name = "root";
    $password = "";
    $database = "toko_online";
    $hostname = "localhost";
    $connection = new mysqli($hostname, $user_name, $password, $database);

    if($connection->connect_error){
        die("Connection Error: " . $connection->connect_error);
    }

    try {
        $getDb = $connection->select_db($database);

        if(!$getDb){
            throw new Exception("Database Not Found !");
        }


        echo "Database connected and Found";
    }catch(Exception $e){
        echo "Error : ". $e->getMassage();
    }


    $connection->close();
?>