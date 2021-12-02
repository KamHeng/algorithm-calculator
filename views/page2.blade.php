<?php
$number=$_GET['number'];
$result = array();
$result = explode(',',$number);

function result($result){
foreach (array_unique($result) as $value){
echo "$value = ".array_count_values($result)[$value]." occurrences <br>";
}
}
?>
<!DOCTYPE html>
<html>
<style>
p{
	text-align:center;
	font-size:20px;
	color:#23C55D;
	
}
h1{
	text-align:center;
	font-size:40px;
}
form{
	text-align:center;
	margin:auto;
	border-style: solid;
	width:700px;
	height:250px;
}
</style>
<body>
<form>
<h1>Here is the result!! </h1>
<p><b><?php result($result);?></b></p> 
</form>
</body>
</html>