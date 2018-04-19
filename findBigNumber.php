<?php
/*Largest Number Among the three number

Algorithm:
 Step 1 -> Start.
 Step 2 -> declare number1,number2,number3.
 step 3 -> check number1 with 2  to find which is big? and return big number
 step 4 -> check the big number of 1 set two with third number. and return the big number.
 step 5 -> display the big number.
 step 6 -> Stop.
 
Code:

//step 1: start
*/
?>
<?php
//step 2 : Declare number 1 , number 2 , number 3
$num1=5;
$num2=7;
$num3=6;

//step 3 -> check number1 with 2  to find which is big? and return big number
	$bigNumber=findBig($num1,$num2);	
	
//step 4 -> check the big number of 1 set two with third number. and return the big number.
	$bigNumber=findBig($bigNumber,$num3);	
	
//step 5 -> display the big number.
	echo $bigNumber;

// step 6 -> Stop.



//function for finding big number
function findBig($num1,$num2){
	
	return ($num1>$num2 ? $num1 : $num2);
	
}


