<?php
$cs=1;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>admin view</h1>
    <div>
        <form action="includes/adminview.inc.php" method="post">
        <input type="text" name="usn" placeholder="usn" ><br>
            <input type="password" name="pwd" placeholder="password"><br>
            <button type="submit" name="submit">create student</button><br>

        </form>
    </div>

   <div>
       <a href="adminviewfaculty.php"> create faculty</a>
   </div>
   <div>
       <a href="adminviewcontact.php">messages</a>
   </div>
   <div>
       <br><br><br><h2>reports</h2>
       

       <div class="dropdown">
  <button class="dropbtn">department</button> 
  <div class="dropdown-content">
<?php

$cs='cs';$ec='ec';$eee='eee';$mech='mech';$civil='civil';
  
  
   
echo "<a href=includes/csReport.php?dep=",urlencode($cs),">$cs</a>";
echo "<a href=includes/csReport.php?dep=",urlencode($ec),">$ec</a>";
echo "<a href=includes/csReport.php?dep=",urlencode($eee),">$eee</a>";
echo "<a href=includes/csReport.php?dep=",urlencode($mech),">$mech</a>";
echo "<a href=includes/csReport.php?dep=",urlencode($civil),">$civil</a>";

    ?>
    
    
  </div>
  

</div>
<a href="faculty_reports.html " style="none">
<button class="dropbtn" >faculty</button>
</a>
       
   </div>

    
</body>
</html>
