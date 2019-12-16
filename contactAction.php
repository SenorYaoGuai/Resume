<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <title>contactAction</title>
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
    <h1 class="text-center">contactAction</h1>
  </header>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="resume.html">Resume</a></li>
            <li class="nav-item"><a class="nav-link" href="photo.html">Photogallary</a></li>
            <li class="nav-item"><a class="nav-link" href="other.html">Other Work</a></li>      
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