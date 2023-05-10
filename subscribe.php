<?php
include("data_class.php");

$name = $_GET['name'];
$email = $_GET['email'];

$obj = new data();
$obj->setconnection();
$obj->subscribe($name,$email);