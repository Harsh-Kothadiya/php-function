<?php
$n1=$_POST["no1"];
$n2=$_POST["no2"];
session_start();
$_SESSION["no1"]=$n1;
$_SESSION["no2"]=$n2;
function f1($n1,$n2)
{
	return ($n1+$n2);
}

function f2($n1,$n2)
{
	return ($n1*$n2);
}

$sum=f1($n1,$n2);
$mul=f2($n1,$n2);

echo "$n1 & $n2 addition is : $sum <br/> <br/>";
echo "$n1 & $n2 multipication is : $mul <br/> <br/>";

echo '
<html>
<head>
</head>
<body>
<a href="f.html">
<div>
<button>back</button>
</div>
</a>
<div align="right">
<form action="f1.php">

<input type="submit" value="next"/>
</form>
</div>


</body>
</html>
';


?>