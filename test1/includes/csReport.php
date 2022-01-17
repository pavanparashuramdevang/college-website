<?php
include_once('dbh.inc.php');

$dep=$_GET['dep'];

if($dep=='cs'){

    $sql="SELECT * FROM users WHERE usn REGEXP '4[hH][gG][0-9][0-9][cC][sS][0-9][0-9][0-9]';";
    $result=mysqli_query($conn,$sql);

    print(
        "<table>"
     );
     print "<tr>";
     print "<td>usn</td><td>name</td>";
     print "</tr>";
     while($row=mysqli_fetch_array($result)){
         print "<tr>";
    
         print "<td>". $row["usn"]."</td>";

         print "<td>". $row["name"]."</td>";
         print "</tr>";
     }
     print "</table>";
}



//ec branch

if($dep=='ec'){

    $sql="SELECT * FROM users WHERE usn REGEXP '4[hH][gG][0-9][0-9][eE][cC][0-9][0-9][0-9]';";
    $result=mysqli_query($conn,$sql);

    print(
        "<table>"
     );
     print "<tr>";
     print "<td>usn</td><td>name</td>";
     print "</tr>";
     while($row=mysqli_fetch_array($result)){
         print "<tr>";
    
         print "<td>". $row["usn"]."</td>";

         print "<td>". $row["name"]."</td>";
         print "</tr>";
     }
     print "</table>";
}


?>