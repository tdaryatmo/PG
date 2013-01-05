<?

/*
Assumptions:
- numbers are inputted manually in script
*/

// number input
$startnum = 23;
$endnum = 31;

foreach (range($startnum, $endnum) as $numnum) {
	modnum($numnum);
}

function modnum($numnum){
		$j=0; $k=0;
        if($numnum%3==0)  
			{ 
				echo " Fizz";
				$j = 1;
			}
		if($numnum%5==0) 
			{
				echo "Buzz ";
				$k = 1;
			}
		$flagnum = $j+$k;
		if($flagnum<1) echo " $numnum ";
}


?>