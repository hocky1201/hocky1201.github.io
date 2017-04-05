<HTML>
<head><title>Calendar2017</title>
</head>

<body bgcolor="#FFEE99">
	<font size=5 color="brown" face="微軟正黑體">
	<?php
		date_default_timezone_get('Asia/Taipei');

		$datetime=date("Y/m/d - H:i:s l");
		echo $datetime."</br>";
		echo "<br/>";

		$recenttime=date("U");
		$lastday=mktime(0,0,0,12,31,2017);
		$time=$lastday-$recenttime;
		$showdays=intval($time/60/60/24);
		$showhors=intval($time/60/60%24);
		$showmins=intval($time/60%60);
		$showsecs=intval($time%60);

		echo "Till "."<B>"."-the last day 2017/12/31-"."</B>"." last ".$showdays."days ".$showhors."hours ".$showmins."minutes ".$showsecs."seconds"."<br/>";
		echo "<br/>";

		if(date('m')==1)
		{
			echo "<img src=jan.jpg width=50% height=50%>";
		}elseif(date('m')==2){
			echo "<img src=feb.jpg width=50% height=50%>";
		}elseif(date('m')==3) {
			echo "<img src=mar.jpg width=50% height=50%>";
		}elseif(date('m')==4) {
			echo "<img src=apr.jpg width=50% height=50%>";
		}elseif(date('m')==5){
			echo "<img src=may.png width=50% height=50%>";
		}elseif(date('m')==6){
			echo "<img src=jun.jpg width=50% height=50%>";
		}elseif(date('m')==7){
			echo "<img src=jul.jpg width=50% height=50%>";
		}elseif(date('m')==8){
			echo "<img src=aug.jpg width=50% height=50%>";
		}elseif(date('m')==9){
			echo "<img src=sep.jpg width=50% height=50%>";
		}elseif(date('m')==10){
			echo "<img src=oct.jpg width=50% height=50%>";
		}elseif(date('m')==11){
			echo "<img src=nov.jpg width=50% height=50%>";
		}elseif(date('m')==12){
			echo "<img src=dec.jpg width=50% height=50%>";
		}


	?>
</font>
</body>
</HTML>
