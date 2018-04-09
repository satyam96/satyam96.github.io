<!DOCTYPE html> 
<html>
<head> 
	<title>Contact | Lifestyle store</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 			
 <style>
		h5{
			text-align:center;
		}
		.jumbotron{
			background-color:#ffffff;
		}
		.footer{
			background-color:;
			color:;
			height: 40px;
			
		}
		body {
			font-family: 'Roboto', sans-serif;
			background-color: #c2d6d6;
		}
		
		.box4{
		background-color:#a3c2c2;
		width: 100%;
		height: 80px;
		text-align: center;
		border-radius: 5px;
	}
	.btn{
		background-color: #002851;
		color: white;
		border-radius:35px;
	}
	.fa {
  		padding: 20px;
  		font-size: 30px;
  		width: 65px;
  		text-align: center;
  		text-decoration: none;
  		margin: 6px 2px;
  		border-radius: 50%;
	}
	.fa-facebook {
 		background: #3B5998;
  		color: white;
	}

	.fa-twitter {
  		background: #55ACEE;
  		color: white;
	}
	.fa-linkedin {
 	 	background: #007bb5;
  		color: white;
	}
	.fa-instagram {
  	background: #9b6954;
  	color: white;
	}
	

	</style>
	</head>
				<!--========= body starts here ============-->
<body>
	
	
<nav class="navbar navbar-inverse navbar-top-fixed">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Lifestyle store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right ">
                    <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                    <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="secure_email_form.php"><span class="glyphicon glyphicon-envelope"></span>Contact Us</a></li>
                </ul>
                </div>
            </div>
        </nav>
	
<div class="container">
 		<!-- feedback form starts here -->
 	<div class="col-sm-6">
 		 
 			<div id="feedback">
  		<!-- heading of the form -->
				<div class="head">
						<h3><img src="ctm.png"></h3>
				<br>
    			</div>
	
		<!-- feedback form form -->
			<fieldset>
			<form id="form" action="secure_email_code.php" method="post">

				<div class="form-group">
				<label for="name">Name:</label>
				<input class="form-control" type = "text" name="vname" value="" placeholder="Your Name"/>
				</div>

				<div class="form-group">
				<label for="email">Email:</label>
				<input class="form-control" type = "text" name="vemail" value="" placeholder="Your Email"/>
				</div>

				<div class="form-group">
				<label for="subject">Topic:</label>
				<input class="form-control" type = "text" name="sub" value="" placeholder="Subject"/>
				</div>

				<div class="form-group">
				<label>Your Suggestion</label>
				<textarea class="form-control" name="msg" placeholder="Type your text here..."></textarea>
				</div>

			</fieldset>
			
				<input class="btn" type="submit" name="submit" id="send" value="Submit"/>
				<input class="btn" type="reset" value="Reset"/>
				<br>
			</form>
		<!-- <h3><?phpinclude "secure_email_code.php"?></h3> -->
 			</div> 
 		</div>
 	
 
 		<!-- feedback form ends here -->

</div>
		<div class="footer">
			<br>
			
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6" style="text-align: right;">
					
						<a href="https://www.facebook.com/profile.php?id=100005791302754" class="fa fa-facebook"></a>
						<a href="https://www.instagram.com/s_satyam_kr/?hl=en" class="fa fa-instagram"></a>
						<a href="https://twitter.com/ed31bf8b0e964fa" class="fa fa-twitter"></a>
						<a href="https://www.linkedin.com/in/satyam-kumar-813976114/" class="fa fa-linkedin"></a>

						<!--<a href="http://facebook.com"><img src="Facebook_logo.png"/></a>
						<img src="instagram-icon-1.png"/>
						<img src="twitter.png"/>
						<img src="lk.png"/>
						<img src="goo.png">
						<img src="Hangouts-Logo.png">-->	
				</div>
			</div>
		</div>
		
	
 </body> 
 <!-- body ends here -->
 
 </html> 
 
 
 
