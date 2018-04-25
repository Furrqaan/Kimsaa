 <?php
	
$name=$_GET['txtname'];
	
	$name=0;
	while ($name<=10) 
	{
		echo "Your Name:".$name.".<br>";
		$name++;
	}

	 
echo "Your Name:".$name.".<br>";
 
?>

<body>
 	
<form method="get">
	 
<input type="text" name="txtname"><br/>


<input type="submit" value="Submit">
	
</form>

 </body>