<?php
     error_reporting(0);

session_start();

$errors = array();


$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"stadiums");


if (isset($_POST['reg_stadium'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $venue = mysqli_real_escape_string($db, $_POST['venue']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $seatsNumber = mysqli_real_escape_string($db, $_POST['seatsNumber']);
   $standingNumber = mysqli_real_escape_string($db, $_POST['standingNumber']);
   $inUefa = mysqli_real_escape_string($db, $_POST['inUefa']);




  if (empty($name)) { array_push($errors, "Попълнете име на стадиона"); }
  if (empty($venue)) { array_push($errors, "Попълнете в кой град се намира стадиона"); }
  if (empty($address)) { array_push($errors, "Попълнете адрес на стадиона"); }
  if (empty($seatsNumber)) { array_push($errors, "Попълнете колко седящи места има стадиона"); }
  if (empty($standingNumber)) { array_push($errors, "Попълнете колко правостоящи места има стадиона"); }


  }

   $name_check_query = "SELECT * FROM stadium WHERE name='$name' OR address='$address' LIMIT 1";
  $result = mysqli_query($db, $name_check_query);
  $stad = mysqli_fetch_assoc($result);

 if ($stad) {
   if ($stad['name'] === $name) {
     array_push($errors, "Този стадион вече е в таблицата");
   }

    if ($stad['address'] === $address) {
      array_push($errors, "Този адрес вече е в таблицата");
    }
 }


  if (count($errors) == 0 && isset($_POST['reg_stadium']))
  {
    $query = "INSERT INTO stadium (name, venue, address, seatsNumber, standingNumber, inUefa)
  			  VALUES('$name', '$venue', '$address', '$seatsNumber', '$standingNumber', '$inUefa')";
  	mysqli_query($db, $query);
  }


?>


