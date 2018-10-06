<?php

$dob = "";
$f_name = "";
$l_name = "";
$social = 0;
$language = 0;
$gender = "";
$county = "";
$need1 = "";
$need2 = "";
$need3 = "";
$availability = "";
$time_invest = "";
$transport = "";

//check if var are posted
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

if(isset($_POST['county'])) {
    $social = $_POST['county'];
}

if(isset($_POST['gender'])) {
    $social = $_POST['gender'];
}

if(isset($_POST['need1'])) {
    $social = $_POST['need1'];
}

if(isset($_POST['need2'])) {
    $social = $_POST['need2'];
}

if(isset($_POST['need3'])) {
    $social = $_POST['need3'];
}

if(isset($_POST['availability'])) {
    $social = $_POST['availability'];
}

if(isset($_POST['time_invest'])) {
    $social = $_POST['time_invest'];
}

if(isset($_POST['transport'])) {
    $social = $_POST['transport'];
}


?>
