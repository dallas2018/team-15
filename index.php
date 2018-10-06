<?php
session_start();

$ini = parse_ini_file('assets/php/app.ini');

$db_name = $ini['db_name'];
$db_user = $ini['db_user'];
$db_pass = $ini['db_pass'];

$mysqli = new mysqli_connect("localhost", $db_user, $db_pass, $db_name);

if(!$mysqli) {
    echo "THERE WAS AN ERROR CONNECTING";
}

echo $db_name . " " . $db_user . " " . $db_pass . " ";

echo "<html>";
echo "<body>";

echo "<form id='test' method='post' action='postData.php'>";
    echo "Name: <input type='text' name='name'><br>";
    echo "SSN: <input type='text' name='ssn'><br>";
    echo "<input type='submit'>";
echo "</form>";

echo "</body>";
echo "</html>";


?>
