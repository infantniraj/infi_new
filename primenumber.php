<?php
/*Algorithm
Step 1-> Start,
Step 2-> declare the variables given number,divided by number,
step 3-> check the number is greater than 2
step 4-> divide the number and check until the remaining is 1.If 1 return the false.
		step 4.1-> else return false
step 5-> display the result.
step 6 -> Stop.

//code
Step 1-> Start,

Step 2-> declare the variables given number,divided by number
*/
$number=9;
$checkIsPrime=isPrime($number);
function isPrime($number){
	$x=2;
	for($n=$number;$x<$number;$x++)   // step 3-> check the number is greater than 2
	{
		if($n % $x ==0)     			//step 4-> divide the number and check until the remaining is 1.If 1 return the false.
		return 0;						//step 4.1-> else return false
	}
	return 1;
}
echo $checkIsPrime;					//step 5-> display the result.


//This is done by lennovo
