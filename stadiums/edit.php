<link rel="stylesheet" type="text/css" href="style.css">
<?php


$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"stadiums");


if(count($_POST)>0) {
mysqli_query($db,"UPDATE stadium set name='" . $_POST['name'] . "', venue='" . $_POST['venue'] . "', address='" . $_POST['address'] . "', seatsNumber='" . $_POST['seatsNumber'] . "' ,standingNumber='" . $_POST['standingNumber'] . "' WHERE name='" . $_POST['name'] . "'");
$message = "Успешно редактиране";
}
$result = mysqli_query($db,"SELECT * FROM stadium WHERE name='" . $_GET['name'] . "'");
$row= mysqli_fetch_array($result);
?>


<html>
<head><button class="btn" onclick="location.href='index.php'">Прегледай стадиони</button>
<title>Редактиране на броя на местата в стадиона</title>
</head>
<body>
<div  class ="header" style="padding-bottom:5px;">
<h2>Редактиране на броя на местата в стадиона</h2>
</div>

<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>

<div class="input-group">
<label>Име</label>
<input type="hidden" name="name" class="txtField" value="<?php echo $row['name']; ?>" >
<input type="text" name="name"  value="<?php echo $row['name']; ?>" readonly>
</div>

<div class="input-group">
<label>Град</label>
<input type="text" name="venue" class="txtField" value="<?php echo $row['venue']; ?>" readonly>
</div>

<div class="input-group">
<label>Адрес</label>
<input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>" readonly>
</div>

<div class="input-group">
<label>Места</label>
<input type="text" name="seatsNumber" class="txtField" value="<?php echo $row['seatsNumber']; ?>">
</div>

<div class="input-group">
<label>Прави</label>
<input type="text" name="standingNumber" class="txtField" value="<?php echo $row['standingNumber']; ?>">
</div>

<div class="input-group">

 <button type="submit" class="btn" name="submit"   >Редактирай</button>
</div>

</form>

<style>
input:-moz-read-only {
  background-color: silver;

}

input:read-only {
  background-color: silver;
   opacity: 0.7;

}
</style>

</body>
</html>