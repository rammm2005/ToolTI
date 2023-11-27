<?php
    $user_name = "root";
    $password = "";
    $database = "toko_online";
    $hostname = "localhost";
    $connection = mysql_connect($hostname, $user_name, $password, $database);
    $getDb = mysql_select_db($connection);
    try ($getDb){
        echo "Database connected and Finding";
    }catch(Exception $e){
        echo "Database Not Found !, '$e'";
    }
?>