<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Lobster&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head> 
<body>   
    <div class="header">  
        <nav>  
                <div>  
                    <a href = "home.php" class ="logo"><img src="images/logo.jpg" alt="can't load the logo"></a>
                    <ul id="navigation">
                    <li class="selected">
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="#about">AboutUs</a>
                    </li>
                    <li class="pics">
                        <a href="#service">Services</a>
                    </li>
                    <li>
                        <a href="#contact">ContactUs</a>
                    </li>
                    </ul>
                </div>
        </nav>
    </div>
        <div class="home">
            <div class="overlay">
                <div class="info">
            <h3>Basic Banking system</h3>
            <p>A Basic Banking system for making transcations between users</p>
            <button><a href="#service">Get Started</a></button></div>
            <div class="img3">
                <img src="images/safe.jpg" alt="cant load"></div>
            <div class="img1">
                <img src="images/img3.png" alt="cant load"></div>
            <div class="img2">
            <img src="images//bank10.jpg" alt="cant load"></div>
        </div>
    </div>
    <div class="parallax">
    <div class="overlay">
                <div class="services">
            <h2 id="service" style="  color:#25f0c4;">.</h2>
            <h1>Our Services</h1>  
            <div class="box1">
                <i class="fa fa-users fa-5x card" aria-hidden="true"></i>
                <h4>View Customers</h4>
                <p>View all Customers data</p>
                <button><a href="transfermoney.php">view customers</a></button>
            </div> 
            <div class="box1">
            <i class="fa fa-history fa-5x card" aria-hidden="true"></i>
                <h4>View Transactions</h4>
                <p>View all the past Transactions</p>
                <button><a href="view.php">view transcations</a></button>
            </div> 
            <div class="box1">
                <i class="fa fa-address-card-o fa-5x card" aria-hidden="true"></i>
                <h4>Transfer Money</h4>
                <p>Transfer Money between multiple account</p>
                <button><a href="transfermoney.php">Transfer Money</a></button>
            </div>         
        </div>
    </div>

    </div>
    <div class="parallax1">
        <div class="overlay">
        <div class="aboutus">
        <h2 id="about" style="  color:#25f0c4;">.</h2>
            <h1>About us</h1>
            <h3>TSF Bank</h3>
            <p>A banking system is a group or network of institutions that provide financial services for us. These institutions are responsible for operating a payment system, providing loans, taking deposits, and helping with investments.</p>
            <button>Learn More</button>
            <img src="images/img2.jpg" alt="cant load">
        </div>
    </div>
</div>
        <div class="contact"> 
            <h1 id="contact">Contact us</h1><br>
            <div> 
            <i class="fa fa-phone block fa-3x" aria-hidden="true"></i>
            <label class="l"> 91338456988 </label>
            <i class="fa fa-envelope block fa-3x left"  aria-hidden="true"></i>  
            <label class="l"> TSF.bank@gmail.com </label>
            </div>
            <div> 
            <i class="fa fa-facebook-official block fa-3x" aria-hidden="true"></i> 
            <label class="l"><a href="" style="text-decoration: none;color:white"> facebook/TSFbank </a> </label>
            <i class="fa fa-instagram block fa-3x le"  aria-hidden="true"></i> 
            <label class="l"><a href="" style="text-decoration: none;color:white"> Instagram/TSFbank </a></label>
            </div>
        </div>
</body>
</html>
