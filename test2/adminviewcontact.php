<!DOCTYPE html>
<html>
<head>

<style>
    table,th,td{
        border:1px solid black;
        
    }
    body{
        background-color: lightblue;
        
    }
    .center{
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>	



<?php
session_start();
include_once "includes/dbh.inc.php";

$sql="SELECT * FROM contact;";
$result=mysqli_query($conn,$sql);

print(
   "<table class=\"center\">"
);
print "<tr>";
    print "<td> NAME </td>";
    print "<td> MAILFROM </td>";
    print "<td> MESSAGE </td>" ;
    print "</tr>";
while($row=mysqli_fetch_array($result)){
    print "<tr>";
    print "<td>". $row["name"]."</td>";
    print "<td>". $row["mailFrom"]."</td>";
    print "<td>". $row["message"]."</td>";
    print "</tr>";
}
print "</table>";


?>