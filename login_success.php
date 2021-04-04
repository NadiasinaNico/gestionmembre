<?php
require_once('navbar.php');
 session_start();
 if(isset($_SESSION["username"]))
 {
     echo '<h3>Login success, welcome - '.$_SESSION["username"].'</h3>';
     echo '<br /><br /><a href="logout.php">Logout</a>';
 } else {
     header("location:pdo_login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/App.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styless.css">

    <title>Document</title>
</head>
<body>





  

    <div class="section">
        <div class="title">
           
            <p>Telecharger votre livre electronique.</p>
        
            </div>
       <div class="services">
           <div class="service">
               <div class="icon">
                   <img src="images/testlivre6.png" />
                </div>
               <h2>Digital Marketing</h2>
               Auteur: Nadiasina
               <br />
               $4,24
               <br />
               200pages
               <br />
               <input type="submit" value="download" class="btn btn-primary"/>
             </div>
             <div class="service">
                <div class="icon">
                    <img src="images/testlivre5.png" />
                </div>
                <h2>Networking</h2>
                Auteur: Francis
                <br />
                $2,12
                <br />
                147pages
                <br />
               <input type="submit" value="download" class="btn btn-primary"/>
              </div>
              <div class="service">
                <div class="icon">
                    <img src="images/testlivre4.png" />
                </div>
                <h2>Cloud computing</h2>
               Auteur: Nadiasina
               <br />
               $3,13
               <br />
               300pages
               <br />
               <input type="submit" value="download" class="btn btn-primary"/>
              </div>
              <div class="service">
                <div class="icon">
                    <img src="images/testlivre3.png" />
                </div>
                <h2>Marketing</h2>
                Auteur: Francis
                <br />
                $2,12
                <br />
                400pages
                <br />
               <input type="submit" value="download" class="btn btn-primary"/>
              </div>
              <div class="service">
                <div class="icon">
                    <img src="images/testlivre2.png" />
                </div>
                <h2>Secret motivation</h2>
                Auteur: Francis
                <br />
                $1,23
                <br />
                500pages
                <br />
               <input type="submit" value="download" class="btn btn-primary"/>

              </div>
              <div class="service">
                <div class="icon">
                    <img src="images/testlivre1.png" alt="" />
                </div>
                <h2>Technique de vente commerciale</h2>
                Auteur: Nadiasina
                <br />
                $2,24
                <br />
                600pages
                <br />
               <input type="submit" value="download" class="btn btn-primary"/>
              </div>
            </div>
       </div>

    <div class="section">
        <div class="title">
            <h1>Contacter Auteur</h1>
           
        
            </div>
            <div class="contact">
                <div class="contact-form">
                    <form>
                        <div class="row">
                            <div class="inuput50">
                            <input type="text" placeholder="First Name" />
                            </div>
                            <div class="inuput50">
                                <input type="text" placeholder="Last Name" />
                             </div>
                        </div>
                        <div class="row">
                            <div class="inuput50">
                            <input type="text" placeholder="Email " />
                            </div>
                            <div class="inuput50">
                                <input type="text" placeholder="Subject" />
                             </div>
                        </div>
                        <div class="row">
                            <div class="input100">
                            <textarea  placeholder="Message "></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input100">
                                <input type="submit" value="Send" />
                             </div>
                        </div>
                    </form>
                </div>
                <div class="contact-info">
                    <div class="info-box">
                    <img src="images/lie.png" class="contact-icon" alt="" />

                        <div class="details">
                            <h4>Address</h4>
                            <p>Andraisoro Antananarivo</p>
                        </div>
                    </div>
                    <div class="info-box">
                    <img src="images/email1.png" class="contact-icon" alt="" />
                        <div class="details">
                            <h4>Email</h4>
                            <a href="">nadiasinanicodev@gmail.com </a>
                            <br />
                            <a href="">francisalison@gmail.com</a>
                        </div>
                    </div>
                    <div class="info-box">
                    <img src="images/call2.jpg" class="contact-icon" alt="" />
                        <div class="details">
                            <h4>Call</h4>
                           <a href="tel:+1102345245">+1034234114322</a>
                           <br />
                           <a href="tel:+1102345245">+1034234114322</a>
                        </div>
                    </div>
                </div>
           
            </div>
    </div>

    
</body>
</html>
   