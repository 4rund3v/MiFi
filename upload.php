<?php session_start();include('func.php');
//Form handeler
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["Login"]))
{
$DEFAULTPASS="password";
$pass=$_POST["password"];
if($pass===$DEFAULTPASS)
{
  $_SESSION["admin"]=1;
}
}
?>

<html>
<head>
<link rel="stylesheet" href="css/dropzone.css">
<script src="dist/dropzone.js"></script>
  <link type="text/css" rel="stylesheet" media="screen" href="css/converse.css" />
   <link rel="shortcut icon" type="image/ico" href="css/images/favicon.ico"/>
    <link type="text/css" rel="stylesheet" media="screen" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" media="screen" href="node_modules/font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" media="screen" href="css/theme.css" />
    <link type="text/css" rel="stylesheet" media="screen" href="css/converse.css" />
	<link rel="shortcut icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700i" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script>document.documentElement.className = 'js';</script>
    <script type="text/javascript" src="analytics.js"></script>

</head>
<body>

<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-caret" viewBox="0 0 24 24">
				<title>caret</title>
				<polygon points="15.7,16.6 11.1,12 15.7,7.4 14.3,6 8.3,12 14.3,18"/>
			</symbol>
			<symbol id="icon-menu" viewBox="0 0 24 24">
				<title>menu</title>
				<path d="M23.8,6H0.1V3h23.7V6z M23.8,10.5H0.1v3h23.7V10.5z M14.2,18h-14v3h14V18z"/>
			</symbol>
			<symbol id="icon-cross" viewBox="0 0 24 24">
				<title>cross</title>
				<path d="M14.1,12l7.3,7.3l-2.1,2.1L12,14.1l-7.3,7.3l-2.1-2.1L9.9,12L2.6,4.7l2.1-2.1L12,9.9l7.3-7.3l2.1,2.1L14.1,12z"/>
			</symbol>
		</svg>
		<main class="view">
			<div class="content">				
						
				
			<nav class="tabsnav tabsnav--vertical tabsnav--zeru">
				<div class="tabsnav__item">
					<div class="tabsnav__bar"></div>
					<h3 class="tabsnav__title">MiFi</h3>
				</div>
				<div class="tabsnav__item">
					<div class="tabsnav__bar"></div>
					<h3 class="tabsnav__title">Services</h3>
				</div>
				<div class="tabsnav__item">
					<div class="tabsnav__bar"></div>
					<h3 class="tabsnav__title"> Requirements </h3>
				</div>
			</nav>
			<div class="tabscontent">
				<div class="tabscontent__item">
					<div class="column">
						<h3 class="column__title"> MiFi Chat Engine</h3>
						<h5 class="column__text">Only real time chat engine that works OFFLINE </h5>
						
					</div>
					<div class="column">
						<h3 class="column__title">Highlights</h3>
						<ul>
							<li><h4 class="column__text">Open Source</h4></li>
							<li><h4 class="column__text">Unlimited Connections</h4></li>
							<li><h4 class="column__text">Multiple Chat Rooms</h4></li>
						</ul>
						
					</div>
				</div>
				<div class="tabscontent__item">
					<div class="column">
						<h3 class="column__title"> MiFi Provides </h3>
						<ul>
						<li><h4 class="column__text">Chat Rooms</h4></li>
						<li><h4 class="column__text">U2U Chat Channels</h4></li>
						<li><h4 class="column__text">File Sharing</h4></li>
						<li><h4 class="column__text">Brodcast Messages</h4></li>					
						</ul>
					</div>
					<div class="column">
						<h3 class="column__title"> MiFi Built with</h3>
						<ul>
						<li><h4 class="column__text">Minimalistic UserInterface</h4></li>
						<li><h4 class="column__text"> Light Weight Platform</h4></li>
						<li><h4 class="column__text"> Responsive design for Mobile Phones & Computers alike</h4></li>					
						</ul>
					</div>
				</div>
				<div class="tabscontent__item">
					<div class="column">
						<h3 class="column__title">Requirements ? </h3>
						<ul>
						<li><h4 class="column__text">   Well all you need is to turn on your wifi antena and connect to the network ...
						well thats all. You are ready to start your conversations.</h4></li>
						</ul>
					</div>
				</div>
				<button class="btn btn--back"><svg class="icon icon--caret"><use xlink:href="#icon-caret"></use></svg></button>
			</div>
		<section class="intro" >
        <div class="row">
            <h1> M i F i</h1>
            <div class="col-md-8 col-md-offset-2">
                <p class="intro-text"> Your Offline Chat Engine  <p>               
            </div>
        </div>        
	    <div class="row">
					<div class="col-lg-2">
						</div>
				<div class="col-lg-8 text-center">
						<h2>Upload Files</h2>
				</div>
				<div class="col-lg-2">
				<?php
		if(isset($_SESSION["admin"]))
      {
      ?>
      <a href="logout.php">Logout</a>
      <?php
      }
      ?>
		</div>
  </div>
<!-- Body -->
  <div class="row">
    <?php if(!isset($_SESSION["admin"]))
    getloginform();
    else {
      getdata();
      ?>
      <?php
    }
    ?>

  </div>

    </section>
		</main>
 
</body>
</html>
