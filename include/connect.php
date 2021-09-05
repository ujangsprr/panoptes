<?php

// $dbhost = 'sql305.epizy.com';
// $dbuser = 'epiz_29605811';
// $dbpswd = 'C6WT4usaMHtWZR';
// $dbname = 'epiz_29605811_panoptes';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpswd = '';
$dbname = 'panoptes';

$connection = mysqli_connect($dbhost, $dbuser, $dbpswd, $dbname);  
if(!$connection) {
die("Database connection failed");
}

?>
