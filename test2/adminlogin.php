<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div id="bg2"></div>
<section class="login_form">
    <h2>admin login</h2>
    <form action="includes/adminlogin.inc.php" method="post">
    <div class="form-field">
          <input type="text" name="name" placeholder="admin name" ><br>
          </div>
          <div class="form-field">
            <input type="password" name="pwd" placeholder="password"><br>
            </div>
            <div class="form-field">
            <button class="btn" type="submit" name="submit">sign in</button><br>
            </div>

    </form>
</section>
    
</body>
</html>