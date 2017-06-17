<html>
<?php
$Link=mysqli_connect(
	'localhost',
	'root',
	'cccamp',
	'php2017');

if($Link){
	echo "Connected!"."<br>";
}else{
	echo "Connection failed!";
}

$id=$_GET["id"];
$sql2="DELETE FROM koala WHERE no='$id'";

$result=mysqli_query($Link, $sql2);
$result=mysqli_query($Link, "SELECT * FROM koala");

echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>";
echo $row["no"];
echo "</td><td>";
echo $row["name"];
echo "</td><td>";
echo $row["gender"];
echo "</td><td>";
echo $row["sport"];
echo "</td><td>";
echo $row["receipt"];
echo "</td><td>";
echo $row["activity"];
echo "</td><td>";
echo $row["ps"];
$id=$row["no"];
echo "</td><td>";
echo "<a href='del.php?id=$id'>Delete</a>";
echo "</td><td>";
echo "<a href='update.php?id=$id'>Update</a>";
echo "</td>";
echo "</tr>";
}

echo "</table>";
mysqli_close($Link);
?>
</html>