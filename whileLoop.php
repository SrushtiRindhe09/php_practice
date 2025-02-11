<?php
	
	//Initialisation
	$i = 0;
	
	while($i <10) //Condiion
	{
		//Statements
		echo "value of i is: " . $i . "</br>"; 
		
		if($i==5)
		{
			echo "Execution stopped at". $i;
			break;
			
		}
			
		
		//Incrementing /Decrement
		$i = $i +1;
	}

?>