<?php
//Factorial of a number.
/*
Algorithm:
Step 1-> Start.
Step 2-> Declare Number,Factorial Result variable is 1 and i =1 
step 3-> Read the value of number 
step 4 -> Repeat the steps until i=Number
			4.1->factorial=factorial*i
			4.2 -> i=i-1
step 5 -> Display the factorial.
step 6 -> Stop
*/
?>
<?php
//code
//Step 1-> Start.

//Step 2-> Declare Number,Factorial Result variable is 1 and i =1 

$number=4;
$factorial_result=1;
$i=1;
//step 3-> Read the value of number 
//step 4 -> Repeat the steps until i=Number
for($i=$number;$i>=1;$i--){								
	
	$factorial_result=$factorial_result*$i;   			//4.1->factorial=factorial*i
}														//4.2 -> i=i-1  //end of for

echo $factorial_result;									//step 5 -> Display the factorial.

//step 6 -> Stop





