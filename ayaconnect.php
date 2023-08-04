<?php
$dbHost= "localhost";
$dbUser ="root";
$dbPass="";
$dbName ="tasks";
$conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn)
{
echo "something went wrong";
}
?>