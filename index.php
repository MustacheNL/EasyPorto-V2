<?php
require_once 'includes/header.php';

$urMomGey = new Database();
$echoPassword = $urMomGey->fetchByID('1', 'admin_credentials');
echo "<br/><br/>Your password (hashed) is: ".$echoPassword['password'];

$echoSomethingElse = $urMomGey->fetchTable('admin_credentials');
var_dump($echoSomethingElse);
echo $echoSomethingElse;

////if($maintenance == 0){
//    echo "<br><br>We zijn niet in onderhoud! 3";
////}