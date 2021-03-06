
<?php
/* Name: Patrick Dang & George McMullen
 * Date: 1/15/2021
 * File URL: http://pdang.greenriverdev.com/328/pp2/index.php
 */

// Turn on error reporting
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 2</title>
</head>
<body>

</body>
</html>

<?php

echo "Step 1: Create an index.php file in your pp2 directory and give it a title and header Pair Program 2<br>";
echo "PHP Array Practice";
echo "<br><br>Step 2: Define an array numbers, which contains 7, 9, 8, 9, 8, 8, 6. In the same PHP block, write a function printArr() that takes an array as a parameter and prints the array, one item per line. Call your function and pass it the number array. Test your code and then commit your changes.<br>";
$numbers = array(7, 9, 8, 9, 8, 8, 6);
include "functions.php";

printArr($numbers);

echo "<br><br>Step 3: Moved print function into an include file called functions.php in the same directory<br>";
echo "<br><br>Step 4: In your functions file, define a function called largest() that takes an array as a parameter 
and returns the largest value in the array. Test the function in your index page, and then commit your changes. <br>";
echo "Largest Number <br>";
echo largest($numbers) . "<br>";
echo "<br>";
echo "Step 5: In your functions file, define a function called removeDups() that takes an array as a parameter and returns an array with duplicates removed. So, given the numbers array, removeDups() 
would return [7, 9, 8, 6]. (Order doesn�t matter.) Test the function from your index page. Commit your changes.<br>";
echo "Removing duplicate numbers<br>";
$noDuplicates = remDup($numbers);
printArr($noDuplicates);

echo "<br><br>Step 6: Define a function called distribution() that takes an array as a parameter and returns an associative array with each value from the original array, and the number of times that value occurs in the original array. The keys should be sorted<br>";

$disArr = distribution($numbers);
foreach($disArr as $num => $amount)
{
    echo $num . "=>" . $amount;
    echo "<br>";
}
