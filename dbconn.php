<?php

$db = mysqli_connect("localhost","root","","videogame");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>