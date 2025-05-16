<?php
    define("hostname","127.0.0.1");
    define("username","root");
    define("password","");
    define("database","curd_application");

    $connection = mysqli_connect(hostname, username, password, database);

    if (!$connection) {
        die ("Connection failed".mysqli_connect_error()); 
    }
    //echo ("Successfully connected");

?>