<?php
require_once("ayaConnect.php");
if(isset($_POST["save"])){
    $id=$_POST['id'];
    $start_aya=$_POST['start_aya'];
    $end_aya = $_POST['end_aya'];
    $user_id =$_POST['user_id'];
    $date =$_POST['date'];
}
$date='2023-09-1 20:40:00';
echo'date before any adding:'.$date;
$date=date('Y-m-d H-i-s',strtotime($date.'+1 day'));
echo'date after adding:'.$date;
?>