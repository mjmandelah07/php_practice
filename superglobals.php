<?php
/*
Some predefined variables in PHP are "superglobals", which means that they are always accessible, 
regardless of scope - 
and you can access them from any function, class or file without having to do anything special.
*/
?>

<?php 
// PHP Superglobal - $GLOBALS
$x = 75;
$y = 25; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo "<br>";
echo "<hr";
?>

<?php
// $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "<hr>";
?>

<?php
// PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
        echo "<br";
    }
}

?>

