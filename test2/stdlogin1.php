<?php
session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div id="bg"></div>
<section class="login_form">
<h2>change password</h2>
<h2>please remember the passwrod</h2>
    <form action="includes/stdlogin1.inc.php" method="post">
       <!-- <div class="form-field">
          <input type="text" name="usn" placeholder="usn" >
        </div>-->

        <div class="form-field">
            <input type="password" name="pwd" placeholder="password">

        </div>
        <div class="form-field">
            <button class="btn" type="submit" name="submit">sign in</button>
</div>


    </form>
</section>
    
</body>
</html>