<?php

define('DBUSER', 'user');
define('DBPW', '6Vmv-Jl/Sba4F9jM');
// $HOST = '192.168.43.138'; // connect wifi asus
$HOST = '192.168.70.238'; // connect wifi samsung
// $HOST = '10.10.39.230'; // connect wifi untar
// $HOST = '192.168.100.8'; // connect wifi rumah
define('DBNAME', 'pesonajawa');



$dbc = mysqli_connect($HOST, DBUSER, DBPW, DBNAME);
if (!$dbc) {
    die('Database connection failed ' . mysqli_connect_error());
    exit();
}
