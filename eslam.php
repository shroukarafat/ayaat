<?php
require_once("ayaconnect.php");

$start="SELECT id FROM ayas  ORDER BY id ASC LIMIT 1";

$result = mysqli_query($conn, $start);
$page = mysqli_fetch_assoc($result);
print_r($page);
echo'<br>';

$end="SELECT id FROM ayas  ORDER BY id desc LIMIT 1";

$resultt = mysqli_query($conn, $end);
$pagge = mysqli_fetch_assoc($resultt);
print_r($pagge);

echo'<br>';
die;