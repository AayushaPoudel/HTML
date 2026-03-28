<?php
// Function to calculate sum of any number of arguments
function sumNumbers() {
    // Get all arguments passed to the function
    $args = func_get_args();
    
    $sum = 0;
    foreach ($args as $num) {
        $sum += $num;
    }
    
    return $sum;
}

// Sum of 2 numbers
echo "Sum of 2 numbers (5 + 10): " . sumNumbers(5, 10) . "<br>";

// Sum of 3 numbers
echo "Sum of 3 numbers (5 + 10 + 15): " . sumNumbers(5, 10, 15) . "<br>";
?>