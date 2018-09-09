<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

PUNTO 2<br>
<?php
   for($i = 100; $i > -2; $i-=2){
      echo $i . "     ";
   }
?>
<br><br>


PUNTO 3<br>
<?php
   for($i = 1; $i < 20; $i++){
   	echo "<br>";
     for($e = 25; $e < 30; $e++){
      echo "($i X $e)"."   ".($i*$e)."<br>";
   	}
   }
?>


</body>
</html>