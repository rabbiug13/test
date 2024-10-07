<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="shortcut icon" type="image" href="images/UAE_903533+909417.webp">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist (3)/css/bootstrap.min.css">
</head>
<body>
    <div id="cantainer-background" style="background-color: orange;">
        <div id="cantainer background">
            <nav class="navbar navbar-expand-md" id="navbar-color">
                <!---brand-->
                <a class="navbar-brand" href="#" id="logo-color">Maisha Restaurant</a>
    
                <!-- toggler/collapsibe button-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
                    <span><i><img src="images/unnamed.jpg" alt="" id="menu-color"></i></span>
                </button>
    
                <!--navbar links-->
                <div class="collapse navbar-collapse" id="collapsiblenavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" id="first">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about us.php" >About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php" >Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php" >Contact Us</a>
                        </li>
                    </ul>
                </div>
        
            </nav>

            <h1 class="text-center" style="font-weight: bold ; margin-top: 50px;">Contact us through this form</h1>

            <div class="container">
                <form action="processorContact.php" method="post">
                    <label for="Name">Name:</label>
                    <input type="text" name="name" id="name"> <br>
    
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email"> <br>
    
                    <label for="telephone">Telephone:</label>
                    <input type="tel" name="telephone" id="telephone"> <br>
                    
                    <label for="message">Message:</label>
                    <textarea name="message" id="comment" cols="25" rows="3"></textarea> <br>
    
                    <input style="background-color:black;color:white;font-weight: bold;cursor: pointer; transition: transform 0.5s eas;" type="Submit" name="submit" id="submit">
                </form>
            </div>
            
            <hr>
            <footer style="background-color: black;">
                <div class="container">
                    <div class="new-card">
                        <div class="row">
                            <div class="col-lg-4" style="background-color: black;">
                                <br>
                                    <p style="color: white;">Author: KANDOLO RABBI Raphael</p>
                                    <p style="color: white;">&copy;copyrightReserved</p>
                                <p style="color: white;">Tel: +256743247180 </p>
                                
                                <a  href="mailto:rkandolorabbi@gmail.com">rkandolorabbi@gmail.com</a>
                                <br><br>
                            </div>
                            <div class="col-lg-4" style="background-color: black;">
                                <br>
                                <p style="color: white;">Located in Kampala,Kansanga </p>
                                <br><br>
                            </div>
                            <div class="col-lg-4" style="background-color: black;">
                                <br>
                                <a href="index.php">Home</a>
                                <a href="about us.php">About Us</a>
                                <a href="menu.php">Menu</a>
                                <a href="contact.php">Contact Us</a>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </footer>

            
</body>
</html>
                    
