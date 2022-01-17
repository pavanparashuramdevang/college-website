<?php
session_start();
include_once "includes/dbh.inc.php";

$sql="SELECT * FROM contact;";
$result=mysqli_query($conn,$sql);

print(
   "<table>"
);
while($row=mysqli_fetch_array($result)){
    print "<tr>";
    print "<td>". $row["name"]."</td>";
    print "<td>". $row["mailFrom"]."</td>";
    print "<td>". $row["message"]."</td>";
    print "</tr>";
}
print "</table>";


?>