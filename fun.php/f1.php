<?php  
session_start(); 
$N1=$_SESSION["no1"];
$N2=$_SESSION["no2"];

function f3($N1,$N2)
{
	return ($N1-$N2);
} 

function f4($N1,$N2)
{
	return ($N1/$N2);
}

$sub=f3($N1,$N2);
$div=f4($N1,$N2);
echo "$N1 & $N2 subtraction is : $sub <br/> <br/>";
echo "$N1 & $N2 subtraction is : $div <br/> <br/>";

echo '
<html>
<head>
</head>
<body>
<a href="f.html">
<div>
<button>Home page</button>
</div>
</a>
</body>
</html>
';
?>
