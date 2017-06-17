<?php

$Link=mysqli_connect(
	'localhost', //mysql主機名稱
	'root', //使用者
	'apple0727@imnuk', //密碼
	'php2017');//使用的資料庫名稱

if($Link)
{
	echo "Connected!"."<br>";
}else{
	echo "Connection failed"."<br>";
}


$eid=$_POST["nid"];
$ename=$_POST["nname"];
$egender=$_POST["ngender"];
$esport=$_POST["nsport"];
$ereceipt=$_POST["nreceipt"];
$eactivity=$_POST["nactivity"];
$eps=$_POST["nps"];

$sql2="UPDATE koala SET name='$ename', gender='$egender', sport='$esport', receipt='$ereceipt', activity='$eactivity', ps='$eps'  
       WHERE no='$eid'";


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