<html>
<?php
$Link=mysqli_connect(
	'localhost',
	'root',
	'apple0727@imnuk',
	'php2017');

if($Link){
	echo "Connected!"."<br>";
}else{
	echo "Connection failed!";
}

$id=$_GET["id"];

$sql2="SELECT * FROM koala WHERE no='$id'";
$result=mysqli_query($Link, $sql2);
$result=mysqli_query($Link, "SELECT * FROM koala");


while($row=mysqli_fetch_assoc($result)){
$id=$row["no"];
$uname=$row["name"];
$ugender=$row["gender"];
$usport=$row["sport"];
$ureceipt=$row["receipt"];
$uactivity=$row["activity"];
$ups=$row["ps"];
}

echo "<form action='updatedata.php' method='post'>";
echo "No.".$id."<br/>";
echo "<input type='hidden' value='$id' name='nid'>";
echo "name<input type='text' value='$uname' name='nname'>"."<br>";
echo "city<input type='text' value='$ugender' name='ngender'>"."<br>";
echo "sport<input type='text' value='$usport' name='nsport'>"."<br>";
echo "receipt<input type='text' value='$ureceipt' name='nreceipt'>"."<br>";
echo "activity<input type='text' value='$uactivity' name='nactivity'>"."<br>";
echo "ps<input type='text' value='$ups' name='nps'>"."<br>"; 
echo "<input type='submit' value='修改資料'>";
echo "</form>";


mysqli_close($Link);
?>
</html>