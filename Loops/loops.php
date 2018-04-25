

<!DOCTYPE html>
<html>
<head>
	<title>Loops</title>
	<style type="text/css">
		li{list-style: none;}.txt input{list-style: none;margin: 5px;padding: 5px;
		border-radius: 8px;width: 200px;}.btn input{font-weight: bold;font-size: 15px;
		margin-left: 60px;background: darkgreen;color: white;padding: 7px;width: 100px;}
	</style>
</head>
<body>
<?php
print "<h2>Loooopssss !!!</h2>";
$b="readcoz.com";
$c="readcoz.com";
$name=$_GET['txtname'];
	for($a=1; $a<=20; $a++)

		{
			echo "<b>".$a."."."</b>" .$name."<br>";	
		}	

?>
	<form method="get">
		<ul>
			<li class="txt"><input type="text" name="txtname"></li>
			<li class="btn"><input type="submit" name="button" value="Submit"></li>
			<li><button onclick="grade();">Submit</button></li>
		</ul>
	</form>

</body>
</html>