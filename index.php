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
f(x)=x^(3)-3x+1<br/>
 <form action="#" method="POST">
 	<table>
 		<tr>
 			<td>Masukkan Interval a</td>
 			<td><input type="text" name="a" id="a" ></td>
 		</tr>
 		<tr>
 			<td>Masukkan Interval b</td>
 			<td><input type="text" name="b" id="b" ></td>
 		</tr>
 		<tr>
 			<td>Perulangan</td>
 			<td><input type="text" name="ulang" id="ulang" ></td>
 		</tr>
 		<tr>
 			<td>Batas Error</td>
 			<td><input type="text" name="error" id="error" ></td>
 		</tr>
 		<tr>
 			<td><input type="submit" value="hitung"></td>
 		</tr>
 	</table>
 </form>
<?php 
include"fungsi.php";
@$a=$_POST['a']; //=================================================interval a
@$b=$_POST['b']; //=================================================interval b
@$batas_error=$_POST['error'];
@$ulang=$_POST['ulang'];

diketahui($a,$b,$batas_error);
$aU=nilai_f($a);
$aV=nilai_f($b);


tulis_fa($a);
echo "f(a)=".$aU;

tulis_fb($b);
echo "f(b)=".$aV;

tulis_fab($aU,$aV);


if ($aU*$aV<0) {
	//====================================

	echo "<br/>Metode bisection dapat digunakan<br>=============<br/>
	<table border='1'>
		<tr>
	 		<td>Iterasi</td>
	 		<td> a</td>
	 		<td> b</td>
	 		<td> c</td>
	 		<td>Nilai f(a)</td>
	 		<td>Nilai f(b)</td>
	 		<td>Nilai f(c)</td>
	 		<td>Nilai f(a)*f(c)</td>
	 		<td>Error</td>
 		</tr>";
	$error=1;
	$iterasi=0;
	while (0<1) {
		if (($iterasi>$ulang) || ($error<$batas_error) || ($a==$b)) {
			break;
		}

		$U=nilai_f($a);
		$V=nilai_f($b);
		$c=($a+$b)/2; //====================================Menghitung titik tengah c
		$W=nilai_f($c); //==================================mencari nilai f(c)

		if (($U*$W)<0) {
			$b=$c;  //====================================== interval b diganti c
			$a=$a;
		}else{
			$a=$c;  //====================================== interval a diganti c
			$b=$b;
		}
		$iterasi++;
		$error=($b-$a)/2;
		echo "
		<tr>
	 		<td>".$iterasi."</td>
	 		<td><br/>".$a."</td>
	 		<td><br>".$b."</td>
	 		<td>".$c."</td>
	 		<td>".$U."</td>
	 		<td>".$V."</td>
	 		<td>".$W."</td>
	 		<td>".($U*$W)."</td>
	 		<td>".$error."</td>
 		</tr>";
	}
	echo " 
 	</table>";
	
	//======================================
}else{
echo "<br/>Metode bisection tidak dapat digunakan<br/>";
}
?>
</body>
</html>