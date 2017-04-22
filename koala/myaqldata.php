<html>
<?php
$Link=mysqli_connect(
	'localhost',
	'root',
	'apple0727@imnuk',
	'php2017');

if($Link){
	echo "Connected!";
}else{
	echo "Connection failed!";
}

$uname=$_GET["name"];
$ugender=$_GET["gender"];
$usport=$_GET["sport"];
$ureceipt=$_GET["receipt"];
$uactivity=$_GET["activity"];
$ups=$_GET["ps"];

$sql2="INSERT INTO koala(name, gender, sport, receipt, activity, ps) 
       VALUES('$uname', '$ugender', '$usport', '$ureceipt', '$uactivity', '$ups')";
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
echo "</td>";
echo "</tr>";
}

echo "</table>";
mysqli_close($Link);
?>
</html>