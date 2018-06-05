<?php 
//Moh Iqbal Okthapian =Fungsi
function diketahui($fa,$fb,$er){
	echo "Diketahui:<br/><hr><hr/>
	Interval=><br/>
	a=".$fa."<br/>
	b=".$fb."<br/>
	batas error=".$er;
}
//==============================================================================
function tulis_fa($fa){
	echo "<br/>======================================<br/>";
	echo "f(a)=(".$fa."^3)-(3*".$fa.")+1<br>";
}

function tulis_fb($fb){
	echo "<br/>___________<br/>";
	echo "f(a)=(".$fb."^3)-(3*".$fb.")+1<br>";
}
function tulis_fc($fc){
	echo "<br/>___________<br/>";
	echo "f(a)=(".$fc."^3)-(3*".$fc.")+1<br>";
}
function tulis_fab($a,$b){
	echo "<br/>___________<br/>";
	echo "f(a)*f(b)<0<br>";
	echo $a."*".$b."<0<br>";
}

function nilai_f($f){
	$f=($f*$f*$f)-(3*$f)+1;
	return $f;
}
function mencari_c($a,$b){
	$c=($a+$b)/2;
	return $c;
}

function hitung_fafb($a,$b){
	$ab=$a*$b;
	return $ab;
}
//==============================================================================




 ?>
