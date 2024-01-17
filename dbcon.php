<?php

/*$con = mysqli_connect("localhost","root","","crud");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}*/


$con = mysqli_connect("stan-victor.mysql.database.azure.com","stanvictor","Azerty1234","crud");
/*mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);*/


//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

?>

