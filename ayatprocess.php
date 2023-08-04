<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
require_once("ayaconnect.php");
if (isset($_POST["user_id"]) && $_POST["user_id"] == "per page") 
{
  ?>
  <form action="ayatprocess.php" method="post" id="p">
<label for="input">input</label>
<input type="text"name='input' id='input' VALUE='input';>
<br>
        <label for="submit" action="form_group" id="p"></label>
        <input type="submit" name="submit" value="submit">
    </form>
<br>
<?php
}
if(isset($_POST["submit"]))
{
          $x=$_POST["input"];
          $start="SELECT page FROM ayas ORDER BY id ASC LIMIT 1  ";
          $end="SELECT page FROM ayas   ORDER BY id DESC LIMIT 1";
          $today = date('Y-m-d'); 
          for($i=1;$i<=$x;$i++){
              $start_aya=$start;
              $end_aya=$end;
              $repeat = strtotime("+1 day",strtotime($today));
              $today = date('Y-m-d',$repeat);
              echo $today;
              echo'<br>';
              $start="SELECT page FROM ayas WHERE page = $i ORDER BY id ASC LIMIT 1 ";
              $end="SELECT page FROM ayas WHERE page = $i ORDER BY id DESC LIMIT 1  ";
              $result = mysqli_query($conn,$start);
              $page = mysqli_fetch_assoc($result);
                  print_r($page);
                  echo'<br>';
                  $resultt = mysqli_query($conn,$end);
              $pagge = mysqli_fetch_assoc($resultt);
                  print_r($pagge);
                  echo'<br>';
          
          }    
        }
if(isset($_POST["user_id"]) && $_POST["user_id"] == "per guz")
{
  $start='SELECT guz FROM ayas ORDER BY id ASC LIMIT 1 ';
  $end='SELECT guz FROM ayas ORDER BY id DESC LIMIT 1 ';
  $today = date('Y-m-d'); 
  for($l=1;$l<=30;$l++){
      $start_aya=$start;
      $end_aya=$end;
      $repeat = strtotime("+1 day",strtotime($today));
      $today = date('Y-m-d',$repeat);
      echo $today;
      echo'<br>';
      $start="SELECT guz FROM ayas WHERE guz = $l ORDER BY id ASC LIMIT 1  ";
  $end="SELECT guz FROM ayas WHERE guz = $l  ORDER BY id DESC LIMIT 1 ";
      $result = mysqli_query($conn,$start);
      $page = mysqli_fetch_assoc($result);
          print_r($page);
          echo'<br>';
          $resultt = mysqli_query($conn,$end);
      $pagge = mysqli_fetch_assoc($resultt);
          print_r ($pagge);
          echo'<br>';
  
  }    
}


  if (isset($_POST['save'])) 
    {
$id=$_POST['id'];
$user_id=$_POST['user_id'];
$start_date=$_POST['start_date'];
    if (!empty($start_date))
    {
      $sql = mysqli_query($conn,"INSERT INTO tasks ( id , user_id , start_date) VALUES ('$id','$user_id' ,'$start_date')");
      if ($sql)
      {
        echo'data inserted';
      }
    }
    }
    ?> <br>
    <?php
    if (isset($_POST['user_id']) && $_POST['user_id'] =='per aya') 
    {
  $start_aya = $id;
  $end_aya = ($start_aya+1);
  $start_aya2 = $end_aya;
  $end_aya2 =($start_aya2+1);
  $start_aya3 = $end_aya2;
  $end_aya3 =($start_aya3+1);
  
  echo "start aya id = ".$start_aya;
  ?>
  <br>
  <?php
     echo "end aya id = ".$end_aya;
     ?>
     <br>
  <?php
     echo "start aya 2 = ".$start_aya2;
     ?>
     <br>
  <?php
     echo "end aya 2= ".$end_aya2;
     ?>
     <?php
     echo "start aya 3 = ".$start_aya2;
     ?>
     <br>
  <?php
     echo "end aya 3= ".$end_aya2;
     


    }
   if (isset($_POST['user_id']) && $_POST['user_id'] =='per two aya') 
    {
    $start_aya = $id;
    $end_aya = ($start_aya+2);
    echo "start aya id = ".$start_aya;
    ?>
    <br>
    <?php
     echo "end aya id = ".$end_aya;
     }


?>


</body>
</html>
