<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/contact.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>near hassan</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>gecmcollegeemail@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>1234567891</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="includes/contact.inc.php" method='post' autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" placeholder="full name" />
              
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="mail" class="input" placeholder="email" />
              
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="text" name="subject" class="input" placeholder="subject" />
              
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="text" > </textarea>
              
              <span>Message</span>
            </div>
            <input type="submit" value="Send" name="submit" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <!--<script src="app.js"></script>-->
  </body>
</html>