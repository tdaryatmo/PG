<?
/*
Assumptions:
- numbers are inputted manually in script
*/

// number input
$startnum = 12;
$endnum = 16;
$flags=array();
$strchk=array(" FizzBuzz ", " Fizz ", " Buzz ");

foreach (range($startnum, $endnum) as $numnum) {
        if($numnum%3==0 && $numnum%5==0)
        	{ 
				echo " FizzBuzz ";
				$flags[]=" FizzBuzz ";
			}
			else if($numnum%3==0) 
			{
				echo " Fizz ";
				$flags[]=" Fizz ";
			} 
			else if ($numnum%5==0)
			{
				echo " Buzz ";
				$flags[]=" Buzz ";
			} else {
					$flags[]=$numnum;
					echo " $numnum ";
			}
		
}
?>
