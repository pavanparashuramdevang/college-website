<?php
$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="project03";

$conn =mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("connection to database failed");
}