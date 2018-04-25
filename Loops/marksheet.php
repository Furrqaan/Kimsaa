<!DOCTYPE html>
<html>
<head>
	<title>Marksheet PHP</title>
	<style type="text/css">
		li{
			list-style: none;
		}
		input{
			padding: 5px;
		}
		.tabledata{
			padding: 5px;
		}
	</style>
</head>
<body>
		<ul>
			<li><input type="text" name="eng" placeholder="Enter English Marks"></li>
			<li><input type="text" name="math" placeholder="Enter Maths Marks"></li>
			<li><input type="text" name="urdu" placeholder="Enter Urdu Marks"></li>
			<li><input type="text" name="it" placeholder="Enter IT Marks"></li>
			<button onsubmit="grade();">Submit</button>
		</ul>
		<table border="2px solid">
			<thead>
				<td class="tabledata">Total Marks</td>
				<td class="tabledata">Your Grade </td>
			</thead>
		</table>
		<?php
function grade()
{
	$english=$_GET['eng'];
	$math=$_GET['math'];
	$urdu=$_GET['urdu'];
	$it=$_GET['it'];
	$totalmarks=400;
	$obtainmarks=$init($english).$init($math).$init($urdu).$init($it);
	$per=$totalmarks/$obtainmarks*100;

if ($per>=90) 
{
	echo "Grade A+";	
}
else if ($per>=80) 
{
	echo "Grade A";
}
else if ($per>=60) 
{
	echo "Grade B";
}
else if ($per>=50) 
{
	echo "Grade C";
}
else if ($per>=40) 
{
	echo "Grade D";
}
else 
{
	echo "Fail";
}

}

?>
</body>
</html>