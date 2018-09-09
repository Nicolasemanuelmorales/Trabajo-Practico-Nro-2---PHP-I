<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


PUNTO 1<br>
<?php 
$x=2;
$b=1;
$resultado= $x*2+pow(2, $x)+$b;
echo $resultado;
?>
<br><br>


PUNTO 3<br>
<?php 
$numeros=array(2,10,3); 
echo max($numeros); 
?>
<br><br>

PUNTO 4<br>
<?php 
$numeros=array(2,10,3); 
echo min($numeros); 
?>

<br><br>

PUNTO 5<br>
<?php 

$a=100;
$b=50;
$c=1;	

if (($a >= $b && $a <= $c ) || ($a <= $b && $a >= $c )) 
	 {
	
		echo  "$a";
	}
else{
		if (($b >= $a && $b <= $c ) || ($b <= $a && $b >= $c )) 
		{
			echo "$b";	
		}
		else
		{
			echo "$c";
		}
	}

?>



</body>
</html>