<?php
	function is_prime($num){
		if ($num < 2){
			return false;
		}
		elseif ($num == 2){
			return true;
		}
		elseif ($num % 2 == 0){
			return false;
		}
		else{
			$sqr = (int) sqrt($num);
			if ($sqr < 3){
				return true;
			}
			else{
				foreach (range(3, $sqr, 2) as $val){
					if ($num % $val == 0){
						return false;
					}
				}
			}
			return true;
		}
	}
