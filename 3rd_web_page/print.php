<?php


	$a=$_GET['a'];
	$oper=$_GET['oper'];
	$b=$_GET['b'];

	
	
	if ($oper=='add') {
		echo $a+$b;	
	} else if ($oper=='sub') {
		echo $a-$b;
	} else if ($oper=='mul') {
		echo $a*$b;
	} else if ($oper=='div') {
		if ($b!=0) {
			echo $a/$b;
		} else {
		echo 'Diairesi me miden!!!!!!!';
		}
	} else if ($oper=='pow') {
		echo pow($a,$b);
	} else if ($oper=='sqrt') {
		echo sqrt($a);
	} else if ($oper=='conc') {
		echo $a.$b;
	} else if ($oper=='mulconc') {
		for ($i = 0; $i <= $b; $i++) {
			echo $a;
		}
	} else if ($oper=='find') {
		echo strpos ( $a , $b );
	} else if ($oper=='length') {
		echo strlen($a);
	} else if ($oper=='upper') {
		echo strtoupper($a);
	} else if ($oper=='size') {
		echo sizeof($a);
	} else if ($oper=='sum') {
		$sum=0;
		for ($i=0;$i<sizeof($a);$i++) {
			$sum=$a[$i]+$sum;
		}
		echo $sum;
	}else if ($oper=='fib') {
		$x=0;
		$sum=1;
		for ($i=2;$i<=$a;$i++) {
			$temp=$sum;
			$sum=$x+$sum;
			$x=$temp;
			
		}
		echo $sum;
	} else {
		exit;
	}
	
?>