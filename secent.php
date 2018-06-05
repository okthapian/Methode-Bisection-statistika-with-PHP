<!DOCTYPE html>
<html>
<head>
	<title>Metode Bisection</title>
</head>
<body>
<h2>METODE BISECTION</h2>
<table>
	<tr>
		<td><img src="flowchart.png" width="80%"></td>
		<td><img src="algoritma.png" width="80%"></td>
		<td><img src="asumsi.png" width="80%"></td>
	</tr>
</table>
<?php 
include"fungsi.php";
$iterasi=0;
$in=0;
$b=2;
$xi2=3;
	while(0<1) {
			$error=$xi2-$b;
		if ($error<0) {
			$error=$error*(-1);
		}
		echo "....nilai error=".$error."<br/>";
 		if ($error<0.001) {
			break;
		}
		
		@$xi=$b-((($b*$b)-($b*2)-3)/((2*$b)-2));
 		$in++;
 		echo "iterasi ke-".$in."==>".$xi."<br/>";
 		$b=$xi;
 		if ($xi<0) {
 			$xi2=$xi2*(-1);
 		}
	}
?>
</body>
</html>