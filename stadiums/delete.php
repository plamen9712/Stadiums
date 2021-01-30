<?php



$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"stadiums");




if (isset($_GET['name']))
{
$name = $_GET['name'];

if ($stmt = $db->prepare("DELETE FROM stadium WHERE name = ? "))
{
$stmt->bind_param("s",$name);
$stmt->execute();
$stmt->close();
header("location: index.php");
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$db->close();

}

?>