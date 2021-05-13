<?php
 if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $num = $_POST['number'];
  $feedback = $_POST['feedback'];
  $servername = "localhost";
  $username = "root";
  $password = "";

  try {
   $conn = new PDO("mysql:host=$servername;dbname=feedback", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $query = $conn->prepare('INSERT INTO feedback (name, email, number, feedback) VALUES (:name, :email, :number, :feedback)');
   $query->bindParam(":name", $name);
   $query->bindParam(":email", $email);
   $query->bindParam(":number", $num);
   $query->bindParam(":feedback", $feedback);
   $query->execute();
   $msg = "Thank you for your valuable feedback!!!";
  } catch(PDOException $e) {
   $msg = "Sorry, an unknown error occurred. Here is the error message: " . $e->getMessage();
  }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interior Decors</title>
  <link rel="stylesheet" href="style.css">

 <style>
   
   .msg {
     width:100%;
     text-align:center;
     font-size: 30px;
     font-family: Nunito;
  color:rgb(190, 14, 196);
   }
  </style>




</head>
<body>
<header class="header__main">
        <div class="header__main__heading">
            <h1> INTERIOR DECORS</h1>
        </div>
        <div class="header__main__navbars">
            <ul class="header__main__navbars">
                <li><a href="/index.html"> Home</a></li>
                <li><a href="/about.html"> About</a></li>
                <li><a href="/projects.html"> Projects</a></li>
       
                <li><a href="/contact.html"> Contact</a></li>

            </ul>
        </div>
    </header>

  <div class="fullbody">
    <br/><br/>
    <br/><br/>
    <div class="msg"><?php echo $msg; ?></div>
    <br/><br/>
    <br/><br/>

    
    <section class="section__footer">
        <div class="section__footer__upper">
            <div class="section__footer__upper__Verzeo">
                <div class="section__footer__upper__Verzeo__header">
                    <h1>INTERIOR DECORS</h1>
                </div>
                <div class="section__footer__upper__Verzeo__content">
                    <p>We create designs for the world</p>
                    <p>You Design We Create</p>
                </div>
            </div>
            <div class="section__footer__upper__one">
                <div class="section__footer__upper__one__header">
                    <h1>Explore</h1>
                </div>
                <div class="section__footer__upper__one__content">
                    <ul>
                        <li><a href="/index.html">Home</a></li>
                     
                        <li><a href="/about.html">About</a></li>
                        <li><a href="/projects.html">Projects</a></li>
                     
                        <li><a href="/contact.html">Contact</a></li>
                    </ul>
                </div>

            </div>
            <div class="section__footer__upper__two">
                <div class="section__footer__upper__two__upper">
                    <div class="section__footer__upper__two__upper__header">
                        <h1>Visit</h1>
                    </div>
                    <div class="section__footer__upper__two__upper__content">
                        <ul>
                            <li>  Location 1</li>
                            <li>Location 2</li>
                            <li>Location 3</li>
                        </ul>
                    </div>
                </div>
                <div class="section__footer__upper__two__lower">
                    <div class="section__footer__upper__two__lower__header">
                        <h1>New Business</h1>
                    </div>
                    <div class="section__footer__upper__two__lower__content">
                        <ul>
                            <li>Email@email.com</li>
                            <li>+91987654321</li>
                       
                        </ul>
                    </div>
                </div>

            </div>
            <div class="section__footer__upper__three">
              <div class="section__footer__upper__three__header">
                  <h1>Follow</h1>
              </div>
              <div class="section__footer__upper__three__content">
                <ul>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">LinkedIn</a></li>
               
                </ul>
            </div>

            </div>
            <div class="section__footer__upper__four">
                <div class="section__footer__upper__four__header">
                    <h1>Legal</h1>
                </div>
                <div class="section__footer__upper__four__content">
                  <ul>
                     <li class="access">Terms</li>
                      <li class="access">Privacy</li>
                 
                  </ul>
              </div>
            </div>
            <div class="section__footer__upper__five"></div>


        </div>
        <div class="section__footer__lower">
            <div class="section__footer__lower__header">
                <h1>2020 Verzeo Major Project. All Rights Reserved</h1>
            </div>



        </div>
    </section>

  </div>
</body>
</html>