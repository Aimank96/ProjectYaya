<?php

$dbhost = getenv("OPENSHIFT_MYSQL_DB_HOST") ?: "localhost";
$dbport = getenv("OPENSHIFT_MYSQL_DB_PORT") ?: "3306";
$dbuser = getenv("OPENSHIFT_MYSQL_DB_USERNAME")?: "root";
$dbpwd = getenv("OPENSHIFT_MYSQL_DB_PASSWORD")?: "root";
$con = mysqli_connect($dbhost,$dbuser,$dbpwd,"nursingsystem",$dbport) or die('try reconnet');


function dd($param) {
    var_dump($param);
    die();
}
?>
