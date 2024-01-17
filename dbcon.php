<?php

/*$con = mysqli_connect("localhost","root","","crud");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}*/


$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "stan-victor.mysql.database.azure.com", "stanvictor", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);

?>

