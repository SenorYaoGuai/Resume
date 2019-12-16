<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!--Sets the title for the website. This appears in the browser tab.-->
<title>contactAction</title>
<!--This meta tage sets the viewport on the screen to the width of the device. This is important for mobile devices. -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--This is the website description. It may be displayed in a browser search-->
<meta name="description" content="This is the website description">
<!--This is a reference to the font used on the website. Go to Gooble Fonts and pick out your own favorits font. You will get a new "link" from Google.  See also the change you need to make in css/style.css.-->
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
<!-- This references the stylesheet for bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!--This links the style sheet for Font Awesome, where you can get nice icons for your website. -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" >
<!-- Custom styles for this template. This is last of the CSS stylesheets, so it can override the Bootsrap CSS. Change the name to the name of your style sheet-->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
  <script src="jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap Stylesheet-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <link rel="stylesheet" href="website.css"><!-- Last Always -->
</head>

<body>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#">WEBSITE NAME OR LOGO</a> </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="resume.html">Resume</a></li>
            <li class="nav-item"><a class="nav-link" href="photo.html">Photogallary</a></li>
            <li class="nav-item"><a class="nav-link" href="other.html">Other Work</a></li>      
        </ul>
          <!--Optional Dropdown menu --> 
          <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                        </ul>
                        </li> 
                      
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </nav>
</header>
<div class="container">
<div class="row">
  <div class="col-sm-12">
    <h1>Thank You</h1>
    <?php
				/*These are the variables in form. In PHP, all variables start with a $ sign. 
				They are used below to generate an email notice. The fields come from the field name in the contact.php script. */
				$request = $_POST['describe']; /* In English: Get the field with the name of "describe" and make a variable named, $request. */
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				
				/*This is the message that is generated to the user when the form is submitted. */
				$success = "Thank you for submitting the form! Your message has been sent.<br /> ";
				
				/*Change the email address to your email address. */
				$to = "tristandallenbach@gmail.com";
				
				/*This set of variables is what you will receive back in an email to alert you to the message. 
				The message is not stored in a database and is only in the email you or your designee receives. The "/n" starts a new line in the form. In PHP*/
				$subject = "Contact Form Submission";
				$msg = 
					"Message:   $describe\n" . 
					"Name:   $name\n" . 
					"Email:  $email\n" .
					"Phone:  $phone\n";
				
				mail($to, $subject, $msg);
				
				echo $success ;
			?>
    <a href="index.html">Return to home page</a><br>
  </div>
</div>
<footer> </footer>
<!-- Javascript links are placed at the end of the document so the pages load faster --> 
<!--This it the reference to jQuery. This script must load before the Bootstrap Javascript--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<!--This is the reference to the Bootstrap Javascript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>