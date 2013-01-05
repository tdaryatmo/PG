<?
ini_set('display_errors', 'Off'); 
error_reporting(~E_ALL);
/*
Assumptions:
- numbers are inputted manually in script
*/

// number input
$startnum = 4;
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
			    $cnt=count($flags);			    
		     	if ((in_array($flags[$cnt-1],$strchk) && in_array($flags[$cnt-2],$strchk)) || end($flags) == " FizzBuzz "){
					$flags[]=" Bazz ";
					echo " Bazz ";
				} else {
					$flags[]=$numnum;
					echo " $numnum ";
				}
			}
		
}
?>
