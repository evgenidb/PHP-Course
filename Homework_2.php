<?php
	require_once ("function_is_prime.php");
	
	$numArr = range(20, 1000, 37);
	$forCheck = array(146, 284, 871);
	
	function find_3_prime($arr){
		$pr = 0;
		foreach($arr as $val){
			if (is_prime($val)){
				$pr++;
				if ($pr == 3){
					$prime = $val;
					break;
				}
			}
		}
		return $prime;
	}
	
	function check_exists($arr, $toCheck){
		foreach ($toCheck as $val){
			if (in_array($val, $arr)){
				$exist = "";
			}
			else{
				$exist = "does not";
			}
			echo "The number {$val} {$exist} exist in the array<br />";
		}
	}
	
	echo "The 3rd prime is: ".find_3_prime($numArr)."<br />";
	check_exists($numArr, $forCheck);