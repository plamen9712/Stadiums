<!DOCTYPE html>
<html>
<head>
  <title>Стадиони</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
  	<h2>Стадиони</h2>

  </div>
 &nbsp&nbsp&nbsp <button class="btn" onclick="location.href='addStadium.php'">Добави стадион</button>


<br></br>

 <?php
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"stadiums");

?>
<?php
if ($result = $db->query("SELECT * FROM stadium"))
{

if ($result->num_rows > 0)
{

echo "<table border='1' cellpadding='10'>";


echo '<table border="4" cellspacing="5" cellpadding="3">
      <tr>
          <td> <font face="Arial">Име на стадион</font> </td>
          <td> <font face="Arial">Град</font> </td>
          <td> <font face="Arial">Адрес</font> </td>
          <td> <font face="Arial">Места за сядане</font> </td>
          <td> <font face="Arial">Места за прави</font> </td>
          <td> <font face="Arial">УЕФА</font> </td>
      </tr>';

while ($row = $result->fetch_object())
{

echo "<tr>";
echo "<td>" . $row->name . "</td>";
echo "<td>" . $row->venue . "</td>";
echo "<td>" . $row->address . "</td>";
echo "<td>" . $row->seatsNumber . "</td>";
echo "<td>" . $row->standingNumber . "</td>";
echo "<td>" . $row->inUefa . "</td>";
echo "<td> <a href='edit.php?name=" . $row->name . "'>Промени броя на местата</a></td>";
echo "<td> <a href='delete.php?name=" . $row->name . "'>Изтрий</a></td>";
echo "</tr>";
}

echo "</table>";
}





else
{
echo "Няма намерени резултати!";
}
}

else
{
echo "Error: " . $db->error;
}


$db->close();

?>

<style>
table, td, th {
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>


</body>


</html>




