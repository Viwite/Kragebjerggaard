<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "kragebjerggaard";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "olinep.dk.mysql";
    $DB_NAME = "olinep_dkkragebjerggaard";
    $DB_USER = "olinep_dkkragebjerggaard";
    $DB_PASS = "Krager";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);