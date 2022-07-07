<?php
// Returns 1 if the pattern was found in the string and 0 if not
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str);  // outputs 1
echo "<br>";
?>

<?php
// Returns the number of times the pattern was found in the string, which may also be 0
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
echo "<br>";
?>

<?php
// 	Returns a new string where matched patterns have been replaced with another string
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
?>