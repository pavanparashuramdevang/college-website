<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stdview</title>
</head>
<body>
    <h1>fill up the form</h1>
    <div>
        <form action="includes/stdview.inc.php" method="post">
           
            <input type="text" name="name" placeholder="full name"><br>
            <input type="text" name="branch" placeholder="branch"><br>
            
            <label for="adhar">adhar photo</label><br>
            <input type="file" name="adhar" placeholder="adharphoto"><br>
            <label for="pan">pan photo</label><br>
            <input type="file" name="pan" value="panphoto"><br><br>
            <button type="submit" name="submit">submit</button>
        </form>
    </div>
    
</body>
</html>