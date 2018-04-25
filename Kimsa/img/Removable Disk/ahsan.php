<?php
$tbl=$_GET['text'];

for($cont=1;$cont<=10;$cont++)
{
	echo  $tbl ."x". $cont ."=" .($tbl*$cont) ."<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get">
		<ul>
			<li><input type="text" name="text"></li>
			<li><input type="submit" name="submit"></li>
		</ul>
	</form>
</body>
</html>