<?php
/*Algorithm
Step 1-> Start,
Step 2-> get total count of series.
step 3 -> initialize 1 st number as 0.2nd number as 1
step 4-> check the total count is < with increment count.
step 5-> add number 1 and number 2 And save number 3.
step 6-> save number 1 into num2 variable
step 7-> save number 3 into number 2 variable
step 8->increase the counter
//code
*/
function Fibonacci($n){
 
    $num1 = 0;
    $num2 = 1;
 
    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}
 
$n = 10;
Fibonacci($n);