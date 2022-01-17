<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send message</title>
</head>
<body>
<p> send message</p>
<form action="includes/contact.inc.php" method='post'>

<input type="text" name="name" placeholder="full name">
<input type="text" name="mail" placeholder="your mail address">
<input type="text" name="subject" placeholder="subject">
<textarea name="message" placeholder="message" ></textarea>

<button type="submit" name="submit">send</button>
</form>    
</body>
</html>