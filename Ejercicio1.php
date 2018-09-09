<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

PUNTO 1<br>
<?php //Punto 1
$a=5;
$b=5.5;
$c="Nicolas";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
?>

<br><br>

PUNTO 2<br>
<?php  //Punto 2
echo "el area del triangulo es ".triangulo(2, 3)."<br>";

function triangulo($base, $altura){
 $area = ($base*$altura)/2; 
 return $area;
}
?>

<br><br>

PUNTO 3<br>
<?php  //Punto 3
echo "el area del rectangulo es ".rectangulo(2, 1)."<br>";

function rectangulo($base, $altura){
 $area = $base*$altura; 
 return $area;
}
?>

<br><br>

PUNTO 4<br>
<?php  //Punto 4
echo "el area del trapecio es ".trapecio(2, 7, 5)."<br>";

function trapecio($bmayor, $bmenor, $altura){
 $area = (($bmayor+$bmenor)*$altura)/2; 
 return $area;
}
?>

<br><br>

PUNTO 5<br>
<?php  //Punto 5

$a=1;
$b=99;
$c=100;	
$d=999999;

list ($a, $b, $c, $d) = array ($d, $c, $b,$a);

echo "La variable 'a' tiene el numero $a <br>" ;
echo "La variable 'b' tiene el numero $b <br>";
echo "La variable 'c' tiene el numero $c <br>" ;
echo "La variable 'd' tiene el numero $d <br>";

?>

 
</body>
</html>