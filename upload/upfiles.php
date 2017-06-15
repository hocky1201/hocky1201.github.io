<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>上傳空間</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">

<?php

$num=$_POST["num"];
for($n="1";$n<=$num;$n++)
{
	echo "<input type='file' name='update'>"."<br>";
}


echo "<br>";

echo "<input type='submit' value='update'>";

/*
if(isset($_FILES["upload"])){

	echo $_FILES["upload"]["name"]."<br/>";
	echo $_FILES["upload"]["tmp_name"]."<br/>";
	echo $_FILES["upload"]["size"]."<br/>";
	echo $_FILES["upload"]["type"]."<br/>";
	$a=pathinfo($_FILES["upload"]["name"]);
	$t=time();



	if(copy($_FILES["upload"]["tmp_name"],$t.".".$a["extension"])){
		echo"檔案上傳成功";
	}else{
		echo "檔案上傳失敗";
	}

}
*/
?>

</body>
</html>