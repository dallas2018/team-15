<?php
session_start();

$ini = parse_ini_file('assets/php/app.ini');

$db_name = $ini['db_name'];
$db_user = $ini['db_user'];
$db_pass = $ini['db_pass'];

if(isset($_POST['dob'])) {
    $dob = $_POST['dob'];
}

if(isset($_POST['f_name'])) {
    $f_name = $_POST['f_name'];
}

if(isset($_POST['l_name'])) {
    $l_name = $_POST['l_name'];
}

if(isset($_POST['social'])) {
    $social = $_POST['social'];
}


$conn = mysqli_connect("localhost", $db_user, $db_pass, $db_name);
$resumeQuery = "select * from clients where dbo='".$dbo."', f_name='".$f_name."', l_name='".$l_name."', social='".$social."';";
$sqlStatement = $conn->prepare($resumeQuery);
$sqlStatement->execute();
$row = $sqlStatement->fetch(PDO::FETCH_ASSOC);

if(!$mysqli) {
    echo "THERE WAS AN ERROR CONNECTING";
}



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
