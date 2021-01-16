
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

echo "Step 1: <br>";
echo "PHP Array Practice";
echo "<br><br>Step 2: <br>";
$numbers = array(7, 9, 8, 9, 8, 8, 6);
include "functions.php";

printArr($numbers);

echo "<br><br>Step 3: Moved print function into an include file called functions.php in the same directory<br>";

