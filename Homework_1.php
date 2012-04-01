<html>
	<head>
		<title>Homework_1.php</title>
		<link rel="stylesheet" type="text/css" href="Homework_1.css" />
	</head>
	<body>
		<p>
			<form action="" method="get">
				<p>
					<label for="number">Enter a number:</label>
					<input type="text" name="number" value=0 />
				</p>
				<input type="submit" value="Submit Number">
			</form>
		</p>
		<?php
			require_once ("function_is_prime.php");
			
			function result($pClass){
				Global $arrayOpt;
				Global $resultClass;
				Global $resultVal;
				
				$resultClass = $pClass;
				$resultVal = $arrayOpt[$resultClass];
			}
			
			
			if (isset($_GET["number"])){
				$param = $_GET["number"];
				
				$arrayOpt = array(	"default" => "Unknown entry",
									"nonNumber" => "The parameter is not a number",
									"nonBetweener" => "The parameter is not within the range[0,19999]",
									"prime" => "The number {$param} is prime",
									"nonPrime" => "The number {$param} is NOT prime");
				
				result("default");
				
				
				if (!(is_numeric($param))){
					result("nonNumber");
				}
				else{
					$param = (int) $param;
					
					if ($param < 0 || 19999 < $param){
						result("nonBetweener");
					}
					else{
						if (is_prime($param)){
							result("prime");
						}
						else{
							result("nonPrime");
						}
					}
				}
			
				echo "<p class={$resultClass}>";
				echo	$resultVal;
				echo "</p>";
			}
		?>
	</body>
</html>