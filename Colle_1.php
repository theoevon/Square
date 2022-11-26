<?php
function colle($x,$y){
	if($x == 0){
		echo"\n";
		exit;
	}
	if($y == 0){
		echo"\n";
		exit;
	}
	if($x == 1){
		for($i = 1 ; $i <= $x ; $i++){
			echo "*";
		}
	}
	if($x > 1){
		if($y == 1){
			for($i = 1 ; $i <= $x ; $i++){
				echo "*";
			}
		}
	}
	if($x > 1){
		if($y > 1){
			echo "/";
			for($l = 1 ; $l <= $x-2;$l++){
				echo"*";
			}
			echo '\\';
		}
	}
	if ($x == 1){
		for($j = 1 ; $j < $y ; $j++){
                        if($y > 1){
                                echo "\n*";
			}
		}echo "\n";
	}
	if($x > 1){
		for($j = 1 ; $j < $y-1 ; $j++){
			if($y > 1){
				echo "\n*";
				if ($x > 1){
					for($k = 1; $k <=  $x-2; $k++){
						echo " ";
					}echo "*";
				}
			}
		}echo "\n";
	}
	if ($x > 1){
		if($y > 1){
			echo '\\';
			for($i = 1 ; $i <= $x-2 ; $i++){
				echo "*";
			}
			echo "/";
			echo "\n";
		}
	}
}
