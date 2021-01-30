<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head> <button class="btn" onclick="location.href='index.php'">Прегледай стадиони</button>
  <title>Стадиони</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Стадиони</h2>
  </div>

  <form method="post" action="addStadium.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Име</label>
  	  <input type="text" placeholder='' name="name" value="">
  	</div>




<?php
  	  $query = "SELECT * FROM venue";
      $result1 = mysqli_query($db, $query);

?>

      &nbsp<label>Град</label>&nbsp&nbsp&nbsp<select name="venue" >
        <option value=""></option>
      <?php
      while ($row = mysqli_fetch_array($result1)) {
          echo "<option value='" . $row['city'] . "'>" . $row['city'] . "</option>";
      }
      ?>
      </select>



  	<div class="input-group">
  	  <label>Адрес</label>
  	 <input type="text" placeholder='' name="address" value="">
  	</div>
  	<div class="input-group">
  	 <label>Места</label>
     <input type="text" placeholder='' name="seatsNumber" value="">
  	</div>
  	<div class="input-group">
      	 <label>Прави</label>
         <input type="text" placeholder='' name="standingNumber" value="">
      	</div>
      	<div >
              	 <label>В календар на УЕФА</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                <input type="radio" name="inUefa"
                <?php if (isset($inUefa)) echo "Да";?>
                value="Да">Да
                <input type="radio" name="inUefa"
                <?php if (isset($inUefa)) echo "Не";?>
                value="Не">Не
              	</div>

        <div class="input-group">
  	  <button type="submit" class="btn" name="reg_stadium">Добави стадион</button>

  	</div>


  </form>

</body>
</html>



