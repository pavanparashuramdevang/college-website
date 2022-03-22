<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stdview_view.css">
    <title>hod view</title>
</head>
<body>


<!--the notification alert message-->
<h1>
   create student notification notification
</h1>
<form action="includes/hodview.inc.php" method="post" >
    <input type="text" name="notification_name" placeholder="notification name"><br><br>


    <input type="text" name="name" placeholder="your name"><br><br>
  <input type="checkbox"  name="image1">
  <input type="text" name="image1_name" placeholder="image1 name">
  <label for="image1"> image1</label><br><br>
  <input type="checkbox"  name="image2" >
  <input type="text" name="image2_name" placeholder="image2 name">
  <label for="image1"> image2</label><br><br>

  <input type="submit" name="submit" value="Submit">
</form>



<form action="includes/hodview.inc.php" method="post" >


<input type="submit" name="drop" value="drop">
</form>


    
<h1>
    search student records
</h1>    
<form action="includes/searchstd.inc.php" method="post">
    <label for="usn"></label>
    
    <input type="text" name="usn" placeholder="usn"><br><br>
    <button type="submit" name="search">search</button>
</form>
</body>
</html>