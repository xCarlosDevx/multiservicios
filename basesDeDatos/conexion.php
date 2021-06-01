<?php

$servername =   'btlzqafnyy04kyx0gglc-mysql.services.clever-cloud.com';
$username   =   'u6uw1hvuqdtjoa8g';
$password   =   'J4EAfEvHaaaUd3yjl0OB';
$dbname     =   "btlzqafnyy04kyx0gglc";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if($conn === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
    echo "Conexion Bien";
}
