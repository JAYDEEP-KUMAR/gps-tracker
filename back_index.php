<?php

  $host      = "localhost";
    $userName  = "root";
    $password1 = "";
    $db        = "manavhostel";
    
    
    $conn = new mysqli($host, $userName, $password1, $db);



$lat = $_POST['lat'];
$lng = $_POST['lng'];

$sql="insert into loc_test (lat,lng) values ('$lat','$lng')";

$result = $conn -> query($sql);

if($result)
{
    echo "yes";
}
else
{
    echo "no";
}



?>