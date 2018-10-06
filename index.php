<?php
session_start();

$ini = parse_ini_file('/assets/php/app.ini');

$db_name = $ini[db_name];

?>
